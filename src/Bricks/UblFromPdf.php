<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\Generator\Invoice;
use Structurize\Structurize\StructurizeApi;

class UblFromPdf extends StructurizeApi implements Brick
{

    private $filestream;

    public function __construct(string $filestream)
    {
        $this->filestream = $filestream;
        return $this;
    }

    public function __toString()
    {
        return json_encode(["brick" => "ubl.frompdf", "parameters" => ["filestream" => $this->filestream]]);
    }
}