<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\Generator\Invoice;
use Structurize\Structurize\StructurizeApi;

class UblToJson extends StructurizeApi implements Brick
{

    private $ubl;

    public function __construct(string $ubl )
    {
        $this->ubl = $ubl;
        return $this;
    }

    public function __toString()
    {
        return json_encode(["brick" => "ubl.tojson", "parameters" => ["ubl" => $this->ubl]]);
    }
}