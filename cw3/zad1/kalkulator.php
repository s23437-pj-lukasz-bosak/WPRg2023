
<?php
include "kalkulatorFunkcje.php";
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
$znak = $_POST['znak'];
$wynik = "";
switch ($znak)
{
    case "dodawanie":
        $wynik = suma($liczba1,$liczba2);
        break;
    case "odejmowanie":
        $wynik = odejmowanie($liczba1,$liczba2);
        break;
    case "mnozenie":
        $wynik = mnozenie($liczba1,$liczba2);
        break;
    case "dzielenie":
        $wynik = dzielenie($liczba1,$liczba2);
        break;
}
echo $wynik;
?>
<br/><br/><br/>
<A href="index.html">Powrót</A>
