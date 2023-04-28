<?php


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

// podsumowanie rezerwacji wypisuje za pomoca echo poszczegolne zmienne.
    echo "<p><strong>Liczba osób:</strong> $liczba_osob</p>";
    echo "<p><strong>Imię:</strong> $imie</p>";
    echo "<p><strong>Nazwisko:</strong> $nazwisko</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Numer telefonu:</strong> $nrtelefonu</p>";
    echo "<p><strong>Adres:</strong> $adres</p>";
    echo "<p><strong>Numer karty kredytowej:</strong> $kartakredytowa</p>";
    echo "<p><strong>Pobyt od: </strong> $dataprzyjazdu</p>";
    echo "<p><strong>Pobyt do: </strong> $datawyjazdu</p>";
    echo "<p><strong>Łóżko dla dziecka:</strong> $lozkodziecko</p>";

// sprawdzam czy  lista z udogodnieniami nie jest pusta, jesli nie wypisuje cala zawartos w petli

    if (is_array($udogodnienia) && !empty($udogodnienia)) {
        echo "<p><strong>Udogodnienia:</strong> ";
        foreach ($udogodnienia as $udogodnienie) {
            echo "$udogodnienie, ";
        }
        echo "</p>";
    }
}

?>