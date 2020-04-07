<?php
require_once "vendor/autoload.php";
use App\Out;

$firstName = "Turkey";
$lastName = "Canadian";
$date = date_create("05/11/2000");
echo Out::getPerson($firstName, $lastName, $date);