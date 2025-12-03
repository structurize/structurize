<?php

namespace Structurize\Structurize\Generator;

class InvoiceLine
{
    // Properties with type declarations
    private $lineId = 0;
    private $name = '';
    private $description = '';
    private $quantity = 0.00;
    private $amount = 0.00;
    private $vatPercentage = 21.00;
    private $accountingCost = '';
    private $info = '';

    // Constructor using property promotion with nullable type for `info`
    public function __construct(){}

    // Getters and Setters

    // Line ID
    public function getLineId()
    {
        return $this->lineId;
    }

    public function setLineId(int $lineId)
    {
        $this->lineId = $lineId;
    }

    // Name
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    // Description
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    // Quantity
    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity)
    {
        $this->quantity = $quantity;
    }

    // Amount
    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount(float $amount)
    {
        $this->amount = $amount;
    }

    // VAT Percentage
    public function getVatPercentage()
    {
        return $this->vatPercentage;
    }

    public function setVatPercentage(float $vatPercentage)
    {
        $this->vatPercentage = $vatPercentage;
    }

    // Accounting Cost (optional)
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    public function setAccountingCost($accountingCost)
    {
        $this->accountingCost = $accountingCost;
    }

    // Info (optional)
    public function getInfo()
    {
        return $this->info;
    }

    public function setInfo($info)
    {
        $this->info = $info;
    }

    // Method to convert object to JSON
    public function __toString()
    {
        return json_encode(get_object_vars($this));
    }

}
