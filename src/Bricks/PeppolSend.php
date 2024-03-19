<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class PeppolSend extends StructurizeApi implements Brick
{

    private $name;
    private $ubl;

    public function __construct(string $name, string $ubl)
    {
        $this->name = $name;
        $this->ubl = $ubl;
        return $this;
    }
    
    public function __toString()
    {
        return json_encode(["brick" => "peppol.send", "parameters" => ["name" => $this->name, "ubl" => $this->ubl]]);
    }
}
