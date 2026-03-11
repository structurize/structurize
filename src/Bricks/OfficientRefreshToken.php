<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class OfficientRefreshToken extends StructurizeApi implements Brick
{
    private string $tenantKey;

    public function __construct(string $tenantKey)
    {
        $this->tenantKey = $tenantKey;

        return $this;
    }

    public function __toString()
    {
        return json_encode([
            "brick"      => "officient.refreshtoken",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
            ],
        ]);
    }
}

