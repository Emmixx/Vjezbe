<?php 
    #Konverzija tipova
    $broj = 749;
    $string = (string)$broj;

    $broj1 = 137;
    $broj2 = "294";

        #TRENUTNA PROMJENA TIPA PODATKA
    echo (int)$broj2 - (int)$broj1;

    #SACUVANA PROMJENA TIPA PODATKA
    $broj2 = (bool)$broj2;

    # GETTYPE() Vraca tip podatka u stringu
    echo gettype($broj2);

    $vrijednost = (boolean)"1347";
    if(gettype($vrijednost) == "string"){
        echo "Nasa vrijednost je string";
    }else if(gettype($vrijednost) == "integer"){
        echo "Nasa vrijednost je integer.";
    }else{
        echo "Nasa vrijednost nije validna";
    }
?>