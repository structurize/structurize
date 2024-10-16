<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class AssistantRun extends StructurizeApi implements Brick
{
    /**
     * @param string $input
     * @return void
     */
    public function __construct(string $assistant, $files = [])
    {
        $this->assistant = $assistant;
        $this->input = $files;
        return $this;
    }

    public function as($name)
    {
        $this->as = $name;
        return $this;
    }

    public function __toString()
    {
        return json_encode(["brick" => "assistant.run", "parameters" => ["assistant" => $this->assistant, "input" => $this->input], "as" => $this->as]);
    }
}
