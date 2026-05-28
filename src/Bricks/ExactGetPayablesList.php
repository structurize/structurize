<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactGetPayablesList extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey,
        private ?int $division,
        private ?string $filter = null,
        private ?string $result = ""
    ) {}

    public function __toString()
    {
        return json_encode([
            "brick"      => "exact.getPayablesList",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
                "division"   => $this->division,
                "filter"     => $this->filter,
                "result"     => $this->result,
            ],
        ]);
    }
}
