<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class StorageGet extends StructurizeApi implements Brick
{

    /**
     * @param string $input
     * @return void
     */
    public function parameters(string $filename)
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
        return json_encode(["brick" => "storage.get", "parameters" => ["filename" => $this->filename], "as" => $this->as]);
    }
}
