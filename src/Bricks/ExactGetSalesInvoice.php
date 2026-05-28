<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactGetSalesInvoice extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey,
        private ?int $division,
        private ?string $guid,
        private ?string $result = "",
        private ?string $key = null
    ) {}

    public function __toString()
    {
        return json_encode([
            "brick"      => "exact.getSalesInvoice",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
                "division"   => $this->division,
                "guid"       => $this->guid,
                "result"     => $this->result,
                "key"        => $this->key,
            ],
        ]);
    }
}
