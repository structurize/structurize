<?php

namespace Structurize\Structurize;

class User extends StructurizeApi
{
    private $endpoint = 'me';
    public $info;

    public function __construct()
    {
        $this->info = $this->call($this->endpoint,[], 'GET');
        return $this;
    }

    public function info()
    {
        return $this->info;
    }

    public function __toString()
    {
        return json_encode($this->info);
    }

}
