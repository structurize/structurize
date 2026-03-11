<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class OfficientGetPeople extends StructurizeApi implements Brick
{
    private int $page;
    private string $tenantKey;

    public function __construct(int $page = 1, string $tenantKey = '')
    {
        $this->page = $page;
        $this->tenantKey = $tenantKey;

        return $this;
    }

    public function __toString()
    {
        return json_encode([
            "brick"      => "officient.getpeople",
            "parameters" => [
                "page"       => $this->page,
                "tenant_key" => $this->tenantKey,
            ],
        ]);
    }
}

