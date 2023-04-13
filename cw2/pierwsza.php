<?php

$liczba1 = $_POST['liczba1'];

if($liczba1 > 0 ){
    czyPierwsza($liczba1);
}else {
    echo "Podana liczba jest ujemna";
}


function czyPierwsza($liczba)
{
    if ($liczba <= 2) {
        echo "Liczba musi byc wieksza od 2.";
    } else {
        $licznik = 0;
        for ($i = 1; $i <= $liczba; $i++) {
            if ($liczba % $i == 0) {
                $licznik += 1;
            }
        }

        if ($licznik == 2) {
            echo "Liczba " . $liczba . " jest liczba pierwsza. Ilość obrotów pętli =  " . $licznik  ;
        } else {
            echo "Liczba " . $liczba . " nie jest liczba pierwsza. Ilość obrotów pętli =  " . $licznik  ;
        }

    }


}


?>
<br/><br/><br/>
<A href="index.html">Powrót</A>
