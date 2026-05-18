<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactGetSuppliers extends StructurizeApi implements Brick
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
            "brick"      => "exact.getSuppliers",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
                "division"   => $this->division,
                "id"         => $this->id,
                "result"     => $this->result,
            ],
        ]);
    }
}
