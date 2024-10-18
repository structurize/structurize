<?php
namespace Structurize\Structurize\Generator;

class Tax
{
    // Properties with type declarations
    private float $vat = 0.00;
    private float $amount = 0.00;
    private float $percentage = 0.00;

    // Constructor using property promotion with nullable type for `info`
    public function __construct(){}

    // Getters and Setters

    // Vat
    public function getVat(): float
    {
        return $this->vat;
    }

    public function setVat(float $lineId): void
    {
        $this->vat = $lineId;
    }

    // Amount
    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $name): void
    {
        $this->amount = $name;
    }

    // Percentage
    public function getPercentage(): float
    {
        return $this->percentage;
    }

    public function setPercentage(float $description): void
    {
        $this->percentage = $description;
    }

    // Method to convert object to JSON
    public function __toString(): string
    {
        return json_encode(get_object_vars($this));
    }

}
