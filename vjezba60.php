<?php 
interface iVrata{
    public function openDoor($side);
    public function closeDoor($side);
    public function fixDoor($side);
}

interface iMotor{
    public function startEngine();
    public function shutdownEngine();
    public function fixEngine();
}

abstract class PrevoznoSredstvo implements iVrata, iMotor{
    public $volan = "";
    public $tockovi = "";
    public $kocnica = "";
    
    public abstract function upali();
    public abstract function ugasi();
    public abstract function kreni();
    public abstract function stani();
    public abstract function vozi();

    public function openDoor($side){}
    public function closeDoor($side){}
    public function fixDoor($side){}

    public function startEngine(){}
    public function shutdownEngine(){}
    public function fixEngine(){}
}

class Automobil extends PrevoznoSredstvo{
    public function upali(){
        this->startEngine();
    }
    public function ugasi(){
        "Automobil je ugasen.";
    }
    public function kreni(){
        "Automobil je Krenuo.";
    }
    public function stani(){
        "Automobil je Stao.";
    }
    public function vozi(){
        "Automobil vozi.";
    }
}
?>