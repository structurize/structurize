<?php
namespace Structurize\Structurize\Generator;

class Attachment
{
    // Properties with type declarations
    private string $name = '';
    private string $stream = '';

   
    public function __construct(){}
    // Getters and Setters

    // Name
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    // Stream
    public function getStream(): string
    {
        return $this->stream;
    }

    public function setStream(string $stream): void
    {
        $this->stream = $stream;
    }



    // Method to convert object to JSON
    public function __toString(): string
    {
        return json_encode(get_object_vars($this));
    }

}
