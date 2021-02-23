<?php


//^^ Conventional way ^^
// $date = new DateTime;

// echo $date->format('dS M Y'); //19th Feb 2021

// echo "\n" . $date->getTimestamp();


//var_dump($date->getTimezone());

//echo "\n" . $date->getTimezone()->getName();


//using static methods

$dateString = '2021-19-02';
$date = DateTime::createFromFormat('Y-m-d', $dateString);

var_dump($date);
