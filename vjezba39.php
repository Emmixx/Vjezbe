<?php 

    $clanovi = array(
        "batman" => "Bruce Wayne",
        "superman" => "Klark Kent",
        "flash" => "Berry Alen",
        "spiderman" => "Pitter Parker",
        "wonderwoman" => "Diana Price"
    );

    foreach($clanovi as $key=>$element){
        echo $key . " is " . $element . "<br>";
    }
?>