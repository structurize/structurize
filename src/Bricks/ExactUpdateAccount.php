<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactUpdateAccount extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey,
        private ?int $division,
        private string $id,
        private array $data,
        private ?string $result = "",
        private ?string $key = null
    ) {}

    public function __toString()
    {
        return json_encode([
            "brick"      => "exact.updateAccount",
            "parameters" => [
                "tenant_key" => $this->tenantKey,
                "division"   => $this->division,
                "id"         => $this->id,
                "data"       => $this->data,
                "result"     => $this->result,
                "key"        => $this->key,
            ],
        ]);
    }
}
