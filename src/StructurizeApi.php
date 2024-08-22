<?php

namespace Structurize\Structurize;

class StructurizeApi
{

    protected $response = '';

    public static function call($endpoint, $data, $method = 'POST', $options = null)
    {
        if ($options) {
            $curlOptions = $options;
        } else {
            // Prepare cURL options
            $curlOptions = [
                CURLOPT_URL => $_ENV['STRUCTURIZE_API_URL'] . $endpoint,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => $method,
                CURLOPT_HTTPHEADER => [
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
            CURLOPT_POSTFIELDS => array('file' => new \CURLFile($file, mime_content_type($file), posted_filename: $name)),
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
        //get class name
        $class = get_class($this);
        //if class name is not Building
        if ($class != 'Structurize\Structurize\Building') {
            //call the endpoint
            $this->as = 'download';

            $building = '{"sync":' . (int)$sync . ', "init":{},"bricks":[' . $this->__toString() . ']}';

            return self::call('building', ['building' => $building]);
        }
    }

}
