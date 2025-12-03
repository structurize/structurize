<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class MyBanxTransactions extends StructurizeApi implements Brick
{

    private $identifiers;
    private $bankAccountId;
    private $page_id;
    private $transactions;
    private $params;

    public function __construct(array $identifiers, string $bankAccountId, int $page_id = 0, array $transactions = [], array $params = [])
    {
        $this->identifiers = $identifiers;
        $this->bankAccountId = $bankAccountId;
        $this->page_id = $page_id;
        $this->transactions = $transactions;
        $this->params = $params;

        return $this;
    }

    public function __toString()
    {

        return json_encode(["brick" => "mybanx.transactions", "parameters" => ["identifiers" => $this->identifiers, "bankAccountId" => $this->bankAccountId, "page_id" => $this->page_id, "transactions" => $this->transactions, "params" => $this->params]]);
    }
}