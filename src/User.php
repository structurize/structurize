<?php

namespace Structurize\Structurize;

class User extends StructurizeApi
{
    private $endpoint = 'me';

    public function info(){
        return $this->call($this->endpoint, [], 'get');
    }

}
