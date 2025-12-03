<?php
namespace Structurize\Structurize\Generator;

class PaymentTerm
{
    // Properties with type declarations
    private $note = '';
    private $amount = 0.00;
    private $percentage = 0.00;
    private $dueDate = '';

    // Constructor using property promotion with nullable type for `info`
    public function __construct(){}

    // Getters and Setters

    // Note
    public function getNote(): string
    {
        return $this->note;
    }

    public function setNote(string $note)
    {
        $this->note = $note;
    }

    // Amount
    public function getAmount(): float
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

    // Due Date
    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate(string $dueDate)
    {
        $this->dueDate = $dueDate;
    }

    // Method to convert object to JSON
    public function __toString()
    {
        return json_encode(get_object_vars($this));
    }

}
