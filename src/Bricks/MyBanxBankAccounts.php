<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class MyBanxBankAccounts extends StructurizeApi implements Brick
{

    private $identifiers;

    public function __construct(array $identifiers)
    {
        $this->identifiers = $identifiers;
        return $this;
    }

    public function __toString()
    {

        return json_encode(["brick" => "mybanx.bankaccounts", "parameters" => ["identifiers" => $this->identifiers]]);
    }
}