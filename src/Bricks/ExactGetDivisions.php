<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactGetDivisions extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey,
        private ?int $division = null,
        private ?string $result = null,
        private ?int $code = null
    ) {}

    public function __toString()
    {
        return json_encode([
            "brick"      => "exact.getDivisions",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
                "division"   => $this->division,
                "result"     => $this->result,
                "code"       => $this->code,
            ],
        ]);
    }
}
