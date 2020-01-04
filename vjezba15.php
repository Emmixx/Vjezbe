<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        #Vjezba - Pređeni put

        $potrosnjaGorina = 7;
        $stanjeRezervoara = 50;
        $ocekivanaDistanca = 1000;
        
        define('KM', 'kilometara');
        define('ZAP', 'litara');
        define('POT', 'litara na stotinu kilometara');
        
        $mogucaDistanca = $stanjeRezervoara / $potrosnjaGorina * 100;
        $mogucaDistanca = round($mogucaDistanca, 2);
        
        #$stanje = $mogucaDistanca > $ocekivanaDistanca;
        #echo "Stanje: ". $stanje;
        if($mogucaDistanca > $ocekivanaDistanca){
            $stanje = "moze";
        }else{
            $stanje = "ne moze";
        }
        
        echo "Automobil koji ima potrosnju goriva od $potrosnjaGorina ". POT . ",
        sa rezervoarom od $stanjeRezervoara " . ZAP . " može preći $mogucaDistanca "
        . KM . "!";
        echo "<br>";
        echo "Obzirom da je ocekivana distanca $ocekivanaDistanca " . KM . ", ovaj je automobil " . $stanje . " preci bez sipanja goriva"


        ?>
</body>
</html>