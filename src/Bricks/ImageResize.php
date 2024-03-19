<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ImageResize extends StructurizeApi implements Brick
{

    /**
     * @param string $input
     * @return void
     */
    public function __construct(string $input, int $width, $format = 'png')
    {
        $this->input = $input;
        $this->width = $width;
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
        return json_encode(["brick" => "image.resize", "parameters" => ["input" => $this->input, "width" => $this->width , "format" => $this->format], "as" => $this->as]);
    }
}
