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

    public function add($brick): self
    {
        $this->bricks[] = $brick;
        return $this;
    }

    public function run(bool $sync = false)
    {
        return $this->call($this->endpoint, ['building' => $this->build($sync)]);
    }

    private function build(bool $sync = false)
    {
        foreach ($this->bricks as $brick) {
            $building[] = json_decode((string)$brick);
        }
        $building = json_encode(['sync' => $sync, 'init' => $this->args, 'bricks' => $building]);
        return $building;

    }
}
