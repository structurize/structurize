<?php

namespace Structurize\Structurize;

use phpDocumentor\Reflection\Types\Parent_;
use function Sodium\add;

class StructurizeApi
{
    private $baseUrl = 'http://127.0.0.1:5000/api/v1/';
    protected $response = '';

    public function call($endpoint, $data, $method = 'POST')
    {
        //call using guzzle

        $client = new \GuzzleHttp\Client();
        $response = $client->request($method, $this->baseUrl . $endpoint, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $_ENV['SMARTBRICKS_API_KEY'],
            ],
            'json' => $data

        ]);
        //get json response
        $this->response = json_decode($response->getBody(), false);
        return $this;
    }

    public function __toString()
    {
        if (isset($this->response->data)) {
            return $this->response->data;
        }
        return $this->response->id;
    }

    public function run(){
        //get class name
        $class = get_class($this);
        //if class name is not Building
        if($class != 'Structurize\Structurize\Building'){
            //call the endpoint
            $this->as = 'download';
            $building = '{"init":{},"building":['.$this->__toString().',{"brick":"download", "parameters": {"input": "$download"}}]}';
            $this->call('building', ['building' => $building]);
        }
    }
}
