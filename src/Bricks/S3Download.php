<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class S3Download extends StructurizeApi implements Brick
{

    /**
     * @param string $input
     * @return void
     */
    public function __construct(string $input)
    {
        $this->input = $input;
        return $this;
    }

    /**  */
    public function as($name)
    {
        $this->as = $name;
        return $this;
    }

    public function __toString()
    {
        return json_encode(["brick" => "s3.download", "parameters" => ["input" => $this->input]]);
    }
}
