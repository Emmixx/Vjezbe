<?php 
    $a = 2;

    switch($a){
        case 1:
        case 2:
        case 3:
            $message = "welcome";
        break;
        case 4:
            $message = "What?";
        break;
        case 5:
        case 6:
            $message = "Who?";
        break;
        default:
            $message = "Warning";
        break;
    }
?>