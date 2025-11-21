<?php

namespace Structurize\Structurize;

use Illuminate\Support\Str;

class StructurizeApi
{

    protected $response = '';
    protected $args = [];

    public static function call($endpoint, $data, $method = 'POST', $options = null, $customUrl = null)
    {

        if ($options) {
            $curlOptions = $options;
        } else {
            // Prepare cURL options
            $curlOptions = [
                CURLOPT_URL => ($customUrl ?? $_ENV['STRUCTURIZE_API_URL']) . $endpoint,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => $method,
                CURLOPT_HTTPHEADER => [
                    'Accept: application/json',
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . $_ENV['STRUCTURIZE_API_KEY'],
                ],
            ];
        }

        // Add JSON data if present
        if (!empty($data)) {
            $curlOptions[CURLOPT_POSTFIELDS] = json_encode($data);
        }

        // Initialize cURL session
        $ch = curl_init();

        // Set cURL options
        curl_setopt_array($ch, $curlOptions);

        // Execute cURL session
        $response = curl_exec($ch);

        // Close cURL session
        curl_close($ch);

        // Decode JSON response

        if(!self::isJson($response)){
            return $response;
        }
        return json_decode($response, false);


    }

    private static function isJson($string) {
        json_decode($string);
        return (json_last_error() === JSON_ERROR_NONE);
    }

    public function sendFile($file, $name)
    {
        $curlOptions = [
            CURLOPT_URL => $_ENV['STRUCTURIZE_API_URL'] . 'upload',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('file' => new \CURLFile($file, mime_content_type($file), $name)),
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $_ENV['STRUCTURIZE_API_KEY'],
            ],
        ];

        return $this->call('upload', [], 'POST', $curlOptions);

    }

    public function __toString()
    {
        if (isset($this->response->data)) {
            return $this->response->data;
        }
        return $this->response->id;
    }

    public function run(bool $sync = false)
    {

        //check version of api in $_ENV['STRUCTURIZE_API_URL']
        $url = $_ENV['STRUCTURIZE_API_URL'];
        $url = explode('/', $url);
        $this->version = $url[4];

        //get class name
        $class = get_class($this);
        //if class name is not Building
        if ($class != 'Structurize\Structurize\Building') {
            $this->as = '$output';

            $extraBrick = $this->getExtraBrick();

            //get the last part of the class name
            $classname = substr(strrchr($class, "\\"), 1);
            $init = json_encode($this->args);
            $building = '{"sync":' . ($sync ? 'true' : 'false') . ', "name" : "Running single brick for '.$classname.'", "init":'.$init.',"bricks":['.$extraBrick. $this->__toString() . '], "returns": ["$output"]}';


            if($this->version == "v1"){
                return self::call('building', ['building' => $building]);
            }else {
                return self::call('building', ['building' => json_decode($building, true)]);
            }
        }
    }

    public function getExtraBrick($extrabrickNumber = 1){

        $extraBrick = '';

        if(isset($this->input)){
            if (is_array($this->input)) {
                foreach ($this->input as $key => $param) {
                    $this->input[$key] = $this->parseInputParam($param, $extraBrick,$extrabrickNumber);
                }
            } else {
                $this->input = $this->parseInputParam($this->input, $extraBrick,$extrabrickNumber);
            }
        }

        return $extraBrick;

    }

    private function parseInputParam($param, &$extraBrick,$extrabrickNumber)
    {
        if (strpos($param, '$') !== true) {

            //check if the input is a filepath
            if (strlen($param) < 500 && file_exists($param)) {
                $result = $this->sendFile($param, Str::orderedUuid());
                if ($this->version == "v1") {
                    $param = '$input_stream_' . $extrabrickNumber;
                    $this->args['input_' . $extrabrickNumber] = $result->id;
                    $extraBrick = '{"brick":"file.get","parameters":{"filename":"$input_' . $extrabrickNumber . '"},"as":"$input_stream_' . $extrabrickNumber . '"},';
                } else {
                    $param = $result->id;
                }
            }
        }
        return $param;

    }

}
