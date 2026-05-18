<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactGetTransactionLines extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey,
        private ?int $division,
        private ?string $filter,
        private ?string $result = ""
    ) {}

    public function __toString()
    {
        return json_encode([
            "brick"      => "exact.getTransactionLines",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
                "division"   => $this->division,
                "filter"     => $this->filter,
                "result"     => $this->result,
            ],
        ]);
    }
}
