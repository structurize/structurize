<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class PeppolSend extends StructurizeApi implements Brick
{

    private $filename;
    private $ubl;

    public function __construct(string $filename, string $ubl)
    {
        $this->filename = $filename;
        $this->ubl = $ubl;
        return $this;
    }

    public function __toString()
    {
        return json_encode(["brick" => "peppol.send", "parameters" => ["filename" => $this->filename, "ubl" => $this->ubl]]);
    }
}
