<?php

namespace Structurize\Structurize;

class StructurizeApi
{

    protected $response = '';

    public function call($endpoint, $data, $method = 'POST')
    {
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
        return json_decode($response, false);


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

            $building = '{"sync":'.(int)$sync.', "init":{},"bricks":[' . $this->__toString() . ']}';

            return $this->call('building', ['building' => $building]);
        }
    }
}
