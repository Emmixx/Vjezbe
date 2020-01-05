<?php
    // Ova Funkcija ispisuje nešto
    function nekiNazivFunkcije(){
        echo "Pozdrav iz funkcije";
    }

    // Ova Funkcija vraća nešto
    function drugaFunkcija(){
        return "Pozdrav iz funkcije";
    }

    // Poziv Funkcija
    nekiNazivFunkcije();
    echo $razultat = drugaFunkcija();
    
    echo "<br>";

    function trecaFunkcija($ime){
        echo "Ja se zovem " . $ime . "<br>";
    }

    trecaFunkcija("Amar");
    trecaFunkcija("Pero Djetlić");
    trecaFunkcija("John Wayne");
    trecaFunkcija("Duško Dugouško");

    function cetvrtaFunkcija($ime = "Johnny English"){
        echo "Hi, " . $ime . ". Welcome to MI7. <br>";
        echo Date("d-m-Y");
        return;
        echo "Bla bla bla";
    }

    cetvrtaFunkcija("His buddy");

    
?>