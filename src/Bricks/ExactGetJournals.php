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
        $parameters = [
            "tenant_key" => $this->tenantKey,
            "type"       => $this->type,
            "division"   => $this->division,
            "code"       => $this->code,
        ];

        if ($this->result !== null && $this->result !== '') {
            $parameters['result'] = $this->result;
        }

        if ($this->key !== null && $this->key !== '') {
            $parameters['key'] = $this->key;
        }

        return json_encode([
            "brick"      => "exact.getJournals",
            "parameters" => $parameters,
        ]);
    }
}
