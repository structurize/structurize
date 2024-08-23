<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class PeppolIdentifiers extends StructurizeApi implements Brick
{

    private $vatNumber;

    public function __construct(string $vatNumber)
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }

    public function __toString()
    {

        return json_encode(["brick" => "peppol.identifiers", "parameters" => ["vatNumber" => $this->vatNumber]]);
    }
}