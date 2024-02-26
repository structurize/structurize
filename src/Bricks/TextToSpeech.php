<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class TextToSpeech extends StructurizeApi implements Brick
{

    /**
     * @param string $input
     * @return void
     */
    public function parameters(string $input)
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
        return json_encode(["brick" => "text.tospeech", "parameters" => ["input" => $this->input], "as" => $this->as]);
    }
}
