<?php

namespace App\Classes;

class FullName
{

    public $firstname;
    public $lastName;

    public $x = 10;
    public $y = 20;

    public function __construct( $data, $ok )
    {
        $this->firstname = $data;
        $this->lastname = $ok;
        $fullname = $this->firstname . $this->lastname;
        echo $fullname;
        echo "<br>";

        echo $this->x + $this->y;
    }

}