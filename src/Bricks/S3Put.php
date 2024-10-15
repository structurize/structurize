<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class S3Put extends StructurizeApi implements Brick
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
        return json_encode(["brick" => "s3.put", "parameters" => ["filename" => $this->filename, "inputstream" => $this->input]]);
    }
}
