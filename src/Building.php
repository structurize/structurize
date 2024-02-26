<?php

namespace Structurize\Structurize;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Process;

class Building extends StructurizeApi
{
    private $endpoint = 'building';
    private $bricks = [];

    public function __construct($args = [])
    {
        $this->args = $args;
        return $this;
    }

    public function add($brick)
    {
        $this->bricks[] = $brick;
        return $this;
    }

    public function build()
    {
        foreach ($this->bricks as $brick) {
            $building[] = json_decode((string)$brick);
        }
        $building = json_encode(['init' => $this->args, 'building' => $building]);
        return $building;

    }

    public function run()
    {
        return $this->call($this->endpoint, ['building' => $this->build()]);
    }
}
