<!--zad 1.10-->

<?php
echo "Podaj wysokość : ";
$wysokosc = (int)readline();
$gwiazdka = "*";
$spacja = " ";

for ($i = 1; $i <= $wysokosc; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

for ($i = $wysokosc ; $i > 0 ; $i--){
    echo str_repeat("*",$i);
   echo "\n";
}
for($i = $wysokosc; $i>0;$i--){
    echo str_repeat(" ", abs($i - $wysokosc)).str_repeat("*", $i);
    echo "\n";
    }

for($i = 1 ; $i <= $wysokosc ; $i++){
    echo str_repeat(" ",abs($i - $wysokosc)).str_repeat("*", $i);
    echo "\n";
}