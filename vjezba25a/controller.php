<?php
require 'model.php';

//Definisanje dvije prazne varijable

$class = $user_status = "";

switch($status){
    case 1:
        // Obje varijable dobijaju vrijednost administratora
        $class = $user_status = "Administrator";
    break;
    case 2:
        $class = $user_status = "Coordinator";
    break;
    case 3:
        $class = $user_status = "User";
    break;
    default:
        $class = "unknown";
        $user_status = "Unknown user";
    break;
}

// Kada korisnik nije nepoznat stavi welcome, a kada jeste stavi warning
$message = ($class != 'unknown') ? 'Welcome' : 'Warning';

// Izlaz iz controller-a
$user_status = "<span class='{$class}'> {$message} {$user_status} </span>";


?>