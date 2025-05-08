<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\Generator\Invoice;
use Structurize\Structurize\StructurizeApi;

class UblFromPdf extends StructurizeApi implements Brick
{

    private $filestream;

    private $returnType;

    public function __construct(string $filestream, string $returnType = 'ubl')
    {
        $this->filestream = $filestream;
        $this->returnType = $returnType;
        return $this;
    }

    public function as($name)
    {
        $this->as = $name;
        return $this;
    }

    public function __toString()
    {
        return json_encode(["brick" => "ubl.frompdf", "parameters" => ["filestream" => $this->filestream , "returnType" => $this->returnType], "as" => $this->as]);
    }
}
