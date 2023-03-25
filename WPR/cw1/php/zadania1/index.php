

<!-- zad 1.1-->


<?php
echo "zad 1.1 <br>";
echo "Witaj w Świecie PHP <br>"
?>
<!--zad 1.2-->

<?php
echo "podaj wartosc dla a : ";

$a = (int)readline();
echo "podaj wartosc dla b : ";
$b = (int)readline();

echo "pole prostokata o obku a i b to : ";
echo $a * $b;

?>

<!--zad 1.3-->

<?php
echo "zad 1.3 <br>";
$a=3;

echo round(sqrt($a),2 ) ;
echo round(pi(),2)

?>


<!--zad 1.4-->

<?php
echo "wartosc 1 ";
$a = (int)readline();
echo "wartosc 2 ";
$b = (int)readline();


echo "wynik dodawania = ";
echo $a+$b;
echo "  ";
echo "wynik mnozenia = ";
echo $a*$b;
echo "  ";
echo "wynik odejmowania = ";
echo $a-$b;
echo "  ";
echo "wynik dzielenia = ";
echo $a/$b;
echo "  ";
echo "modulo = " ;
echo $a%$b;
echo "  ";

?>
<!--zad 1.5-->

<?php
echo "wpisz tekst 1 : ";
$text1 = (string)readline();
echo "wpisz text 2 : ";
$text2 = (string)readline();

print "''"."%".$text1.$text2."%#$"."''";

?>



<!--zad 1.6-->

<?php
echo "podaj wartosc dla pierwszego boku : ";
$a = (int)readline();
echo "podaj wartość dla drugego boku : ";
$b = (int)readline();
echo "podaj wartosc dla trzeciego boku : ";
$c = (int)readline();


if (($a+$b>$c) && ($a+$c>$b) && ($b+$c>$a))
{
    if (($a*$a+$b*$b==$c*$c) || ($a*$a+$c*$c==$b*$b) || ($c*$c+$b*$b==$a*$a)) echo "To jest to trójkąt prostokątny";
    else echo "To nie jest trójkąt prostokątny";
}
else echo "BŁĄD";
?>

<!--zad 1.7-->

<?php

echo "Podaj liczbę 1-12 : ";
$number = (int)readline();

switch ($number) {
    case "1":
        echo "STYCZEN";
        break;
    case "2":
        echo "Luty";
        break;
    case "3":
        echo "marzec";
        break;
    case "4":
        echo "kwiecien";
        break;
    case "5":
        echo "maj";
        break;
    case "6":
        echo "czerwiec";
        break;
    case "7":
        echo "lipiec";
        break;
    case "8":
        echo "sierpien";
        break;
    case "9":
        echo "wrzesien";
        break;
    case "10":
        echo "pazrdziernik";
        break;
    case "11":
        echo "listopad";
        break;
    case "12":
        echo "grudzien";
        break;
    default:
        echo "BŁĄD";
}
?>


<!--zad 1.8-->

<?php
echo "Podaj pierwsza liczbe a : ";
$a = (int)readline();
echo "Podaj drugą liczbe b : ";
$b = (int)readline();
echo "podaj trzecią liczbe c : ";
$c = (int)readline();

if ($a>$b && $a>$c)
{
    echo "Najwieksza liczba to a : " . $a;
}
else if ($b>$a && $b>$c)
{
    echo "Najwieksza liczba to b : " . $b;
}
else
{
    echo "Najwieksza liczba to c : " . $c;
}

?>


<!--zad 1.10-->

<?php

?>

