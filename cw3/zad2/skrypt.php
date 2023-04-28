<?php
$dane = fopen("dane.txt", "a");

$pole1 = $_POST["pole1"];
$pole2= $_POST["pole2"];

$linia1 = "przykladowy tekst z pola1: " . $pole1 . "\n";
$linia2 = "przykladowy tekst z 2 giego pola: ". $pole2 . "\n";

fwrite($dane, $linia1);
fwrite($dane, $linia2);
fclose($dane);


exit;

?>

