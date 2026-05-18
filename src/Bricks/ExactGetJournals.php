<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactGetJournals extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey,
        private int $type,
        private ?int $division,
        private ?string $result = "",
        private ?string $code = "",
        private ?string $key = null
    ) {}

    public function __toString()
    {
        return json_encode([
            "brick"      => "exact.getJournals",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
                "type"       => $this->type,
                "division"   => $this->division,
                "result"     => $this->result,
                "code"       => $this->code,
                "key"        => $this->key,
            ],
        ]);
    }
}
