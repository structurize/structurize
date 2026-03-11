<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class OfficientAddEvent extends StructurizeApi implements Brick
{
    private array $params;
    private string $personId;
    private string $tenantKey;

    public function __construct(array $params, string $personId, string $tenantKey)
    {
        $this->params = $params;
        $this->personId = $personId;
        $this->tenantKey = $tenantKey;

        return $this;
    }

    public function __toString()
    {
        return json_encode([
            "brick"      => "officient.addevent",
            "parameters" => [
                "params"     => $this->params,
                "person_id"  => $this->personId,
                "tenant_key" => $this->tenantKey,
            ],
        ]);
    }
}

