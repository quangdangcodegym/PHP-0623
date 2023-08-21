<?php

class ElectricLamp{
    private bool $status;

    public function __construct()
    {
        $this->status = false;
    }
    public function turnOff(){
        $this->status = false;
    }
    public function turnOn(){
        $this->status = true;
    }
    public function getInfo(){
        return "Electric: " . ($this->status ? "ON" : "OFF") . "<br>";
    }
}


class SwitchButton{
    private bool $status = false;           // 
    // private ?ElectricLamp $lamp = null;     // 
    private array $lamps; //    

    public function __construct(){
        $this->status = false;
        $this->lamps = [];
    }

    public function connectToElectricLamp(ElectricLamp $lamp){
        $this->lamps [] = $lamp;
        // array_push($this->lamps, $lamp);
    }

    public function turnOn(){
        $this->status = true;
        foreach ($this->lamps as $l){
            $l->turnOn();
        }
            
    }
    public function turnOff(){
        $this->status = false;
        foreach ($this->lamps as $l){
            $l->turnOff();
        }
    }

}
$lamp1 = new ElectricLamp();
$lamp2 = new ElectricLamp();
$lamp3 = new ElectricLamp();


$sw1 = new SwitchButton();
$sw1->connectToElectricLamp($lamp1);
$sw1->connectToElectricLamp($lamp2);
$sw1->connectToElectricLamp($lamp3);

echo $lamp1->getInfo();


$sw1->turnOn();

echo $lamp1->getInfo();
echo $lamp2->getInfo();
echo $lamp3->getInfo();


?>