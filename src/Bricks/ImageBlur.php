<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ImageBlur extends StructurizeApi implements Brick
{
    private $endpoint = 'image/blur';

    /**
     * @param string $input
     * @return void
     */
    public function __construct(string $input)
    {
        $this->input = $input;
        return $this;
    }

    public function as($name)
    {
        $this->as = $name;
        return $this;
    }

    public function __toString()
    {
        return json_encode(["brick" => "image.blur", "parameters" => ["inputstream" => $this->input], "as" => $this->as]);
    }
}
