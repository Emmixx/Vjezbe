<?php 
    #Operatori

    #Operatori dodjele = 
    #Aritmeticki operatori +, -, *, /, %
        #Modulo operator
            //echo  12 % 2;
    #Operatori Poređenja <, >, <=, >=
        # Operator jednako ==
        echo 10 == "10";
        # Operator identicnosti ===
        echo 10 === 10;
        # Operator nije jednako !=
        echo 10 != 5;
        # Operator nije identicno !==
        echo 10 !== "10";
    #Nadovezivanje stringova .
        echo "Ovo " . "je " . "kompletan " . "string";
    #Unarni Operatori +=, -=, *=, /=, %=
        $a = 15;
        $a += $a + 7; //$a = $a +7;
        echo $a;
        $a -= 3; //$a = $a - 3;
        echo $a;
    #Inkrement i dekrement ++, --
        $c = 10;
        echo $c++;
        echo ++$c;
        echo "<br>";
        $x = 4;
        $y = $x--;
        echo ($y++)+$x;
        echo $y + $x;
    #Logicki operatori &&, || i !
        $f = 10;
        $g = 5;
        $h = 0;
        echo "<br>";
        echo !$f<3 && $g>4;
        echo !($f<3 || $g>4);

?>