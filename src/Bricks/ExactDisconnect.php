<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactDisconnect extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey
    ) {}

    public function __toString()
    {
        return json_encode([
            "brick"      => "exact.disconnect",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
            ],
        ]);
    }
}
