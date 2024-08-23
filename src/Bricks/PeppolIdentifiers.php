<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class PeppolUnRegister extends StructurizeApi implements Brick
{

    private $identifier;

    public function __construct(string $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    public function __toString()
    {
        
        return json_encode(["brick" => "peppol.unregister", "parameters" => ["identifier" => $this->identifier]]);
    }
}