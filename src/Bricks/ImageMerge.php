<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ImageMerge extends StructurizeApi implements Brick
{
    /**
     * @param string $foreground
     * @param string $background
     * @return void
     */
    public function parameters(string $foreground, string $background)
    {
        $this->foreground = $foreground;
        $this->background = $background;
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
        return json_encode(["brick" => "image.merge", "parameters" => ["foreground" => $this->foreground, "background" => $this->background], "as" => $this->as]);
    }
}
