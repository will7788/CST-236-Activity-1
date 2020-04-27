<?php
class Car{
    
    private $tires;
    private $engine;
    private $tirePressure;
    private $isRunning;
    
    public function __construct(){
        $this->isRunning = false;
    }

    public function addTires($newTires){
        if($newTires == 4)
        {
            $this->tires = 4;
        }
        else 
        {
            echo "Please enter four tires to put tires on your car.\n";
        }
    }
    
    public function fillTires($psi){
        if($psi == 32)
        {
            echo "32 is the perfect pressure.\n";
            $this->tirePressure = $psi;
        }
        else{
            echo "Wrong pressure, try 32.\n";
           
        }
    }
    
    public function addEngine(){
        $this->engine = true;
        echo "Engine has been added.\n";
    }
    
    public function start(){
        if($this->engine== true and $this->tirePressure == 32 and $this->tires == 4)
        {
            $this->isRunning = true;
            echo "Engine is running.\n";
        }
        else {
            echo "Something is wrong, check all variables and try again.\n";
        }
    }
    public function stop(){
        $this->isRunning = false;
        echo "Car has been stopped.\n";
    }
    
}




?>