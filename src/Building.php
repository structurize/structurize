<?php

namespace Structurize\Structurize;

use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Process;

class Building extends StructurizeApi
{
    private $endpoint = 'building';
    private $bricks = [];
    private $files = [];
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
        $fileObject = new \stdClass();
        $fileObject->file = $file;
        $fileObject->fileVariableName = $variableName;
        $fileObject->filename = Str::orderedUuid();
        $this->files[] = $fileObject;

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
        if ($this->files != []) {
            foreach ($this->files as $file) {
                $return = $this->sendFile($file->file, $file->filename);
                $this->args[str_replace('$','',$file->fileVariableName)] = $return->id;
            }

        }
        $building = $this->build($sync);

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
