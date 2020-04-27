<?php

class Batman extends SuperHero{
    
    function __construct(){
        $this->name = "Batman";
        $this->health = rand(1, 1000);
    }
    
}

?>