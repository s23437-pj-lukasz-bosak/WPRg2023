<?php


if(!file_exists("data.csv")) {
    $csvHeader = "liczba_osob;imie;nazwisko;email;nrtelefonu;adres;kartakredytowa;dataprzyjazdu;datawyjazdu;lozkodziecko;udogodnienia\n";
    $file = fopen("data.csv", "a");
    fwrite($file, $csvHeader);
    fclose($file);
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $liczba_osob = $_POST["liczba_osob"];
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $email = $_POST["email"];
    $nrtelefonu = $_POST["nrtelefonu"];
    $adres = $_POST["adres"];
    $kartakredytowa = $_POST["kartakredytowa"];
    $dataprzyjazdu = $_POST["dataprzyjazdu"];
    $datawyjazdu = $_POST["datawyjazdu"];
    $lozkodziecko = $_POST["lozkodziecko"];
    $udogodnienia = $_POST["udogodnienia"];



    $csvData = "$liczba_osob;$imie;$nazwisko;$email;$nrtelefonu;$adres;$kartakredytowa;$lozkodziecko;";
    if(is_array($udogodnienia) && !empty($udogodnienia)) {
        $csvData .= implode(",", $udogodnienia);
    }
    $csvData .= "\n";


    $file = fopen("data.csv", "a");
    fwrite($file, $csvData);
    fclose($file);

}
?>
