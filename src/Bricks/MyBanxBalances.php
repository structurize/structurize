<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class MyBanxBalances extends StructurizeApi implements Brick
{

    private $identifiers;
    private $bankAccountId;

    public function __construct(array $identifiers, string $bankAccountId)
    {
        $this->identifiers = $identifiers;
        $this->bankAccountId = $bankAccountId;
        return $this;
    }

    public function __toString()
    {

        return json_encode(["brick" => "mybanx.balances", "parameters" => ["identifiers" => $this->identifiers, "bankAccountId" => $this->bankAccountId]]);
    }
}