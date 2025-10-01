<?php
namespace Structurize\Structurize\Generator;

class PaymentTerm
{
    // Properties with type declarations
    private string $note = '';
    private float $amount = 0.00;
    private float $percentage = 0.00;
    private string $dueDate = '';

    // Constructor using property promotion with nullable type for `info`
    public function __construct(){}

    // Getters and Setters

    // Note
    public function getNote(): string
    {
        return $this->note;
    }

    public function setNote(string $note): void
    {
        $this->note = $note;
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

    // Due Date
    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    public function setDueDate(string $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    // Method to convert object to JSON
    public function __toString(): string
    {
        return json_encode(get_object_vars($this));
    }

}
