<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class TextTranslate extends StructurizeApi implements Brick
{
    /**
     * @param string $input
     * @return void
     */
    public function __construct(string $input, $prompt = '')
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
        return json_encode(["brick" => "text.translate", "parameters" => ["input" => $this->input, "prompt" => $this->prompt], "as" => $this->as]);
    }
}
