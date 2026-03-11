<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class OfficientGetEventTypes extends StructurizeApi implements Brick
{
    private int $year;
    private string $tenantKey;

    public function __construct(int $year, string $tenantKey)
    {
        $this->year = $year;
        $this->tenantKey = $tenantKey;

        return $this;
    }

    public function __toString()
    {
        return json_encode([
            "brick"      => "officient.geteventtypes",
            "parameters" => [
                "year"       => $this->year,
                "tenant_key" => $this->tenantKey,
            ],
        ]);
    }
}

