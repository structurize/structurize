<?php

namespace Structurize\Structurize;

class Brick
{
    public function __construct(string $brick)
    {
        // return an instance of the brick based on the string

        $brick = 'Structurize\Structurize\Bricks\\' . $brick;
        return new $brick;

    }


}
