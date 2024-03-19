<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class StoragePut extends StructurizeApi implements Brick
{
    /**
     * @param string $input
     * @return void
     */
    public function __construct(string $filename, string $input)
    {
        $this->filename = $filename;
        $this->input = $input;
        return $this;
    }


    public function __toString()
    {
        return json_encode(["brick" => "storage.put", "parameters" => ["filename" => $this->filename, "input" => $this->input]]);
    }
}
