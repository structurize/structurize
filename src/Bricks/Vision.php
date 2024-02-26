<?php

namespace Structurize\Structurize\Bricks;

class Vision implements Brick
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
        return json_encode(["brick" => "vision", "parameters" => ["input" => $this->input], "as" => $this->as]);
    }
}
