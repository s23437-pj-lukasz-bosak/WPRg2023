<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number_of_people = $_POST["liczba_osob"];
    $name = $_POST["imie"];
    $surname = $_POST["nazwisko"];
    $email = $_POST["email"];
    $tel = $_POST["nrtelefonu"];
    $adress = $_POST["adres"];
    $creditcard = $_POST["kartakredytowa"];
    $babybed = $_POST["lozkodziecko"];
    $udogodnienia = $_POST["udogodnienia"];
// podsumowanie rezerwacji wypisuje.
    echo "<p> Oto twoja rezerwacja, sprawdz czy podane dane są poprawne </p>";
    echo "<p>Liczba osób: $number_of_people</p>";
    echo "<p>imię: $name</p>";
    echo "<p>nazwisko: $surname</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Numer telefonu: $tel</p>";
    echo "<p>Adres: $adress</p>";
    echo "<p>Numer karty kredytowej: $creditcard</p>";
    echo "<p>Łóżko dla dziecka: $babybed</p>";


    // sprawdzam czy nie lista jest pusta, jesli nie wypisuje cala zawartos w petli
    if (is_array($udogodnienia) && !empty($udogodnienia)) {
        echo "<p> wybrane opcje dodatkowe: </p>";
        foreach ($udogodnienia as $udogodnienie) {
            echo "$udogodnienie, ";
        }
        echo "</p>";
    }
}
?>

