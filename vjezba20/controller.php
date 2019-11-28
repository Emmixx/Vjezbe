<?php
    $loggedUser = 2;
    
    $user = 1;
    $Admin = 2;

    if(($loggedUser & $Admin) != 0){
        include 'menu2.php';
    }

?>