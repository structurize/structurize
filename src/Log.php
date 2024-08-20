<?php

namespace Structurize\Structurize;

class Log extends StructurizeApi
{
    public function send(string $brick, string $message) : void
    {

        $_ENV['STRUCTURIZE_API_URL'] = 'https://app.structurize.be/api/';

        //create the building log
        $buildingLog = ["building" => ["sync" => true, "name" => $message]];

        $buildingUUID = $this->call('buildinglog', $buildingLog)->uuid;

        //create the brick log
        $brickLog = ["brick" => $brick, "parameters" => 1, "logging_uuid" => $buildingUUID, "output" => ["type" => "string", "content" => $message], "quantity" => 1];

        $this->call('bricklog', $brickLog);


    }

}
