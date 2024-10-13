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
    protected $args;

    public function __construct()
    {
        $url = $_ENV['STRUCTURIZE_API_URL'];
        $url = explode('/', $url);
        $this->version = $url[4];
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
        set_time_limit(0);
        if ($this->files != []) {
            foreach ($this->files as $file) {
                $return = $this->sendFile($file->file, $file->filename);
                $this->args[str_replace('$','',$file->fileVariableName)] = $return->id;
            }

        }
        $building = $this->build($sync);


        if($this->version == "v1"){
            return self::call($this->endpoint, ['building' => $building]);
        }else {
            return self::call($this->endpoint, ['building' => json_decode($building, true)]);
        }

    }

    public function returns($returns = []): self
    {
        $this->returns = $returns;
        return $this;
    }

    public function __toString()
    {
        return "{\"building\" : {$this->build()}}";
    }

    private function build(bool $sync = false): string
    {
        $extraBrickNumber = 1;
        foreach ($this->bricks as $brick) {
            if (isset($brick->input)) {
                $this->input = $brick->input;
                $extrabrick = $this->getExtraBrick($extraBrickNumber);
                if ($extrabrick != '') {
                    //trim last comma
                    $building[] = json_decode(substr($extrabrick, 0, -1));
                    if (isset($this->args['input_' . $extraBrickNumber])) {
                        $brick->input = '$input_stream_' . $extraBrickNumber;
                    }
                    $extraBrickNumber++;
                }
            }


            $building[] = json_decode((string)$brick);

        }
        $building = json_encode(['sync' => $sync, 'name' => $this->name ?? 'Building ... ', 'init' => $this->args ?? [], 'bricks' => $building, 'returns' => $this->returns ?? []]);

        return $building;

    }
}
