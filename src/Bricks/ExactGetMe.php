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
        $parameters = [
            "tenant_key" => $this->tenantKey,
        ];

        if ($this->result !== null && $this->result !== '') {
            $parameters['result'] = $this->result;
        }

        if ($this->key !== null && $this->key !== '') {
            $parameters['key'] = $this->key;
        }

        return json_encode([
            "brick"      => "exact.getMe",
            "parameters" => $parameters,
        ]);
    }
}
