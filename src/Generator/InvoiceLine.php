<?php

namespace App\Services\Transformers;

class GenericInvoiceLine
{
    // Properties with type declarations
    private int $lineId;
    private string $description;
    private float $quantity;
    private float $amount;
    private float $vatPercentage;
    private ?string $info;

    // Constructor using property promotion with nullable type for `info`
    public function __construct(){}

    // Getters and Setters

    // Line ID
    public function getLineId(): int
    {
        return $this->lineId;
    }

    public function setLineId(int $lineId): void
    {
        $this->lineId = $lineId;
    }

    // Description
    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    // Quantity
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): void
    {
        $this->quantity = $quantity;
    }

    // Amount
    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    // VAT Percentage
    public function getVatPercentage(): float
    {
        return $this->vatPercentage;
    }

    public function setVatPercentage(float $vatPercentage): void
    {
        $this->vatPercentage = $vatPercentage;
    }

    // Info (optional)
    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(?string $info): void
    {
        $this->info = $info;
    }

    // Method to convert object to JSON
    public function toJson(): string
    {
        return json_encode(get_object_vars($this));
    }
}
