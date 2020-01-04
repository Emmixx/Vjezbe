<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ribarski Dom</title>
    <style>
    h1{color: red;
        text-align: center;
    }
    </style>
</head>
<body>
    <?php 
        $nazivRestorana = "Ribarski Dom";
        $adresaRestorana = "Hadzici br. 95";
        $koordinate_lat = "43.837317";
        $koordinate_long = "18.216119";
        $ocjenaRestorana = "4.5";
        $statusRestorana = "Otvoren";
        $brojTelefona = "061/058-577";
    ?>
<!--- HTML/PHP Ispis --->
    <h1><?php echo $nazivRestorana; ?></h1>
    <p>
        Adresa restorana:
        <a href="https://maps.google.com?q=<?php echo $adresaRestorana; ?>">
            <?php echo $adresaRestorana; ?>
        </a>
    </p>
    <p>
        Broj Telefona:
        <a href="tel:<?php echo $brojTelefona; ?>">
            <?php echo $brojTelefona; ?>
        </a>
    </p>
    <p>
        Status: <?php echo $statusRestorana; ?>
    </p>
    <p>Ocjena <?php echo $ocjenaRestorana; ?>
</body>
</html>
