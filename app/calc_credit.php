<?php
require_once dirname(__FILE__).'/../config_credit.php';

//biorę parametry do obliczania

$kredyt = $_REQUEST ["x"];
$Procent = $_REQUEST ["y"];
$czas = $_REQUEST ["z"];

// Walidacja


if ($kredyt == "") {
    $messages [] = "Nie podano wysokości kredytu.";
}
if ($Procent == "") {
    $messages [] = "Nie podano wartości oprocentowania.";
}
if ($czas  == "") {
    $messages [] = "Nie podano okresu kredytowania.";
}

if (empty($messages)) {
    if (! is_numeric($kredyt)) {
        $messages [] = "Wysokość kredytu nie jest liczbą!";
    }
    if (! is_numeric($Procent)) {
        $messages [] = "Oprocentowanie nie jest liczbą!";
    }
    if (! is_numeric($czas )) {
        $messages [] = "Okres kredytowania nie jest liczbą!";
    }
}

// Wykonanie zadania

if (empty($messages)) {

$kredyt = intval($kredyt);
$Procent = floatval($Procent);
$czas  = intval($czas );

$result = (($Procent/100 * $kredyt) + $kredyt) / ($czas *12);
}


include 'credit_view.php';