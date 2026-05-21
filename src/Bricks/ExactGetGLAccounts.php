<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactGetGLAccounts extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey,
        private ?int $division,
        private ?string $code,
        private ?string $result = "",
        private ?string $key = null
    ) {}

    public function __toString()
    {
        $parameters = [
            "tenant_key" => $this->tenantKey,
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
            "brick"      => "exact.getGLAccounts",
            "parameters" => $parameters,
        ]);
    }
}
