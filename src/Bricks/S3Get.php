<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class S3Get extends StructurizeApi implements Brick
{

    /**
     * @param string $input
     * @return void
     */
    public function __construct(string $filename)
    {
        $this->filename = $filename;
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
        return json_encode(["brick" => "s3.get", "parameters" => ["filename" => $this->filename], "as" => $this->as]);
    }
}
