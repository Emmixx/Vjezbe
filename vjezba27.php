<?php

    $startValue = 10;
    $endValue = 120;
    $trip = 150;

    // Kompletna duzina puta
    $completeValue = $endValue - $startValue;

    if($trip > $completeValue){
        $tripValue = $trip - $completeValue;
        echo "You passed " . $tripValue . " more then needed";
    }else if($trip < $completeValue){
        $tripValue = $completeValue - $trip;
        echo "You need " . $tripValue . " more to travel";
    }else{
        echo "You passed exactly how much you needed";
    }
?>