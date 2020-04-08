<?php

namespace App;


// $firstName = "Turkey";
// $lastName = "Canadian";
// $date = date_create("05/11/2000");
// echo Out::getPerson($firstName, $lastName, $date);


class Out
{
    static function getPerson($firstName, $lastName, $date){
        $person = new Person($firstName, $lastName, $date);
        return "<script>console.log('".$person->getFirstName()."\t".$person->getLastName()."\t".date_format($person->getDayOfBirth(), 'd-m-Y')."');</script>";
    }
}