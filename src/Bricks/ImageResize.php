<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ImageResize extends StructurizeApi implements Brick
{

    /**
     * @param string $input
     * @return void
     */
    public function __construct(string $input, $width, $format = 'png')
    {
        $this->input = $input;
        $this->width = (int) $width;
        $this->format = $format;
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
        return json_encode(["brick" => "image.resize", "parameters" => ["inputstream" => $this->input, "width" => $this->width , "outputformat" => $this->format], "as" => $this->as]);
    }
}
