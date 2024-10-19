<?php

namespace Structurize\Structurize\Bricks;

use Structurize\Structurize\StructurizeApi;

class CompanFromVat extends StructurizeApi implements Brick
{
    /**
     * @param string $input
     * @return void
     */
    public function __construct(string $countrycode, string $vatnumber)
    {
        $this->countrycode = $countrycode;
        $this->vatnumber = $vatnumber;
        return $this;
    }


    public function __toString()
    {
        return json_encode(["brick" => "company.fromvat", "parameters" => ["countrycode" => $this->$countrycode, "vatnumber" => $this->vatnumber]]);
    }
}
