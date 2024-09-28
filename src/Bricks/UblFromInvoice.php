<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\Generator\Invoice;
use Structurize\Structurize\StructurizeApi;

class UblFromInvoice extends StructurizeApi implements Brick
{

    private $invoice;

    public function __construct(Invoice $invoice)
    {
        $this->invoice = invoice;
        return $this;
    }

    public function __toString()
    {
        return json_encode(["brick" => "ubl.fromjson", "parameters" => ["json" => $this->invoice->__toString()]]);
    }
}