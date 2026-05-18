<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactGetCostUnits extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey,
        private ?int $division,
        private ?string $code,
        private ?string $result = "",
        private ?string $key = null
    ) {}

    public function __toString(): string
    {
        return json_encode([
            "brick"      => "exact.getCostUnits",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
                "division"   => $this->division,
                "code"       => $this->code,
                "result"     => $this->result,
                "key"        => $this->key,
            ],
        ]) ?: '{}';
    }
}
