<?php 
    $promjenljiva = "Ovo je promjenljiva";
    define("KONSTANTA", "Ovo je Konstanta");

    echo $promjenljiva;
    echo "<br><br>";
    echo KONSTANTA;

    $promjenljiva = "Ovo je promjenjena promjenljiva";
    define ("KONSTANTA", "Ovo je nova konstanta");
    
    echo $promjenljiva;
    echo "<br><br>";
    echo KONSTANTA;

?>