<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

/**
 * @property string $input
 * @property string|null $prompt
 */
class ImageVision extends StructurizeApi implements Brick
{
    /**
     * @param string $input
     * @param string $prompt
     * @return void
     */
    public function __construct(string $input, string $prompt = null)
    {
        $this->input = $input;
        $this->prompt = $prompt;
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
        return json_encode(["brick" => "image.vision", "parameters" => ["inputstream" => $this->input, "prompt" => $this->prompt], "as" => $this->as]);
    }
}
