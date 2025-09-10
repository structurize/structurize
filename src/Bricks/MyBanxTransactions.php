<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class MyBanxTransactions extends StructurizeApi implements Brick
{

    private array $identifiers;
    private string $bankAccountId;

    public function __construct(array $identifiers, string $bankAccountId)
    {
        $this->identifiers = $identifiers;
        $this->bankAccountId = $bankAccountId;
        return $this;
    }

    public function __toString()
    {

        return json_encode(["brick" => "mybanx.transactions", "parameters" => ["identifiers" => $this->identifiers, "bankAccountId" => $this->bankAccountId]]);
    }
}