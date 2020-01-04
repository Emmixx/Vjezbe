<?php 
$tekst = "abcde";
$broj = 12345;
$decimalni = 123.45;
$niz = ['a', 'b', 'c', 'd', 'e'];

# Ispis tipova podataka i njihovih vrijednosti
    var_dump($tekst);
    echo "<br>";
    var_dump($broj);
    echo "<br>";
    var_dump($decimalni);
    echo "<br>";
    var_dump($niz);

# print_r() - ispis niza ili objekta
    echo "<br>";
    print_r($niz);

# printf() - Evaluacija / interpolacija promjenljivih u tekst
    echo "<br>";
    $x = 15;
    $y = 17;
    $z = 27;
    $c = 42;

    printf("Ostalo je jos %s dana...", $x);
    printf("Ostalo je jos %s dana, do mog %s rođendana!<br>", $x, $x);
    printf("Prva: %s, Druga: %s<br>", $x, $y);
    printf("Ja imam %b godina.<br>", $z);
    printf("Ovo je ")


?>