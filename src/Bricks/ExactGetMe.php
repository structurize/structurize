<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactGetMe extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey,
        private ?string $result = "",
        private ?string $key = null
    ) {}

    public function __toString()
    {
        return json_encode([
            "brick"      => "exact.getMe",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
                "result"     => $this->result,
                "key"        => $this->key,
            ],
        ]);
    }
}
