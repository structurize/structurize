<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ImageDuotone extends StructurizeApi implements Brick
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
        return json_encode(["brick" => "image.duotone", "parameters" => ["inputstream" => $this->input], "as" => $this->as]);
    }
}
