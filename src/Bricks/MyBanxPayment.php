<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class MyBanxPayment extends StructurizeApi implements Brick
{

    private array $identifiers;
    private string $bankAccountId;
    private array $paymentData;

    public function __construct(array $identifiers, string $bankAccountId, array $paymentData)
    {
        $this->identifiers   = $identifiers;
        $this->bankAccountId = $bankAccountId;
        $this->paymentData   = $paymentData;
        return $this;
    }

    public function __toString()
    {

        return json_encode(["brick" => "mybanx.payment", "parameters" => ["identifiers" => $this->identifiers, "bankAccountId" => $this->bankAccountId, "paymentData" => $this->paymentData]]);
    }
}