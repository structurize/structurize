<?php

namespace Structurize\Structurize;

use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Process;

class Building extends StructurizeApi
{
    private $endpoint = 'building';
    private $bricks = [];
    private $file;
    private $filename;
    private $fileVariableName;
    private $name;
    private $returns;
    private $args;

    public function __construct()
    {
        return $this;
    }

    public function withParams($params): self
    {
        $this->args = $params;
        return $this;
    }

    public function addFile($file, $variableName): self
    {
        $this->file = $file;
        $this->fileVariableName = $variableName;
        $this->filename = Str::orderedUuid();
        $this->args[str_replace('$','',$variableName)] = $this->filename;
        return $this;
    }

    public function addBrick($brick): self
    {
        $this->bricks[] = $brick;
        return $this;
    }

    public function as($name): self
    {
        $this->name = $name;
        return $this;
    }

    public function run(bool $sync = false)
    {
        $building = $this->build($sync);
        //if has file
        if ($this->file) {
            $this->fileVariableName = $this->sendFile($this->file, $this->filename);
        }

        return $this->call($this->endpoint, ['building' => $building]);
    }

    public function returns($returns = []){
        $this->returns = $returns;
        return $this;
    }

    public function __toString()
    {
        return "{\"building\" : {$this->build()}}";
    }

    private function build(bool $sync = false)
    {
        foreach ($this->bricks as $brick) {
            $building[] = json_decode((string)$brick);
        }
        $building = json_encode(['sync' => $sync, 'name' => $this->name ?? 'Building ... ', 'init' => $this->args ?? [], 'bricks' => $building, 'returns' => $this->returns ?? []]);
        return $building;

    }
}
