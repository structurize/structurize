<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class PeppolRegister extends StructurizeApi implements Brick
{

    private $identifier;

    public function __construct(string $email, string $firstname, string $lastname, string $identifier, string $company = null)
    {
        $this->email      = $email;
        $this->firstname  = $firstname;
        $this->lastname   = $lastname;
        $this->identifier = $identifier;
        $this->company    = $company;
        return $this;
    }

    public function __toString()
    {

        return json_encode(["brick" => "peppol.register", "parameters" => ["email" => $this->email, "firstname" => $this->firstname, "lastname" => $this->lastname, "identifier" => $this->identifier, "company" => $this->company ?? '-']]);
    }
}