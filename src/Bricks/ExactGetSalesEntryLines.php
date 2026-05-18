<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactGetSalesEntryLines extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey,
        private ?int $division,
        private ?string $id = null,
        private ?string $result = null
    ) {}

    public function __toString()
    {
        return json_encode([
            "brick"      => "exact.getSalesEntryLines",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
                "division"   => $this->division,
                "id"         => $this->id,
                "result"     => $this->result,
            ],
        ]);
    }
}
