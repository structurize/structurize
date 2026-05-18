<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class ExactSaveTokens extends StructurizeApi implements Brick
{
    public function __construct(
        private string $tenantKey,
        private ?string $result,
        private ?int $division,
        private ?string $salesJournal,
        private ?string $purchaseJournal,
        private bool $syncPurchaseInvoices,
        private ?string $divisionName = null,
        private ?string $salesJournalName = null,
        private ?string $purchaseJournalName = null,
        private ?string $defaultGlAccount = null,
        private ?string $key = 'standaard'
    ) {}

    public function __toString()
    {
        return json_encode([
            "brick"      => "exact.saveExactTokens",
            "parameters" => [
                "tenant_key"             => $this->tenantKey,
                "result"                 => $this->result,
                "division"               => $this->division,
                "sales_journal"          => $this->salesJournal,
                "purchase_journal"       => $this->purchaseJournal,
                "sync_purchase_invoices" => $this->syncPurchaseInvoices,
                "division_name"          => $this->divisionName,
                "sales_journal_name"     => $this->salesJournalName,
                "purchase_journal_name"  => $this->purchaseJournalName,
                "default_gl_account"     => $this->defaultGlAccount,
                "key"                    => $this->key,
            ],
        ]);
    }
}
