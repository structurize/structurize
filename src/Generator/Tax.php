<?php
namespace Structurize\Structurize\Generator;

class Tax
{
    // Properties with type declarations
    private $vat = 0.00;
    private $amount = 0.00;
    private $percentage = 0.00;

    // Constructor using property promotion with nullable type for `info`
    public function __construct(){}

    // Getters and Setters

    // Vat
    public function getVat()
    {
        return $this->vat;
    }

    public function setVat(float $lineId)
    {
        $this->vat = $lineId;
    }

    // Amount
    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount(float $name)
    {
        $this->amount = $name;
    }

    // Percentage
    public function getPercentage()
    {
        return $this->percentage;
    }

    public function setPercentage(float $description)
    {
        $this->percentage = $description;
    }

    // Method to convert object to JSON
    public function __toString()
    {
        return json_encode(get_object_vars($this));
    }

}
