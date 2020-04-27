<?php

class Person {
    
    private $name;
    private $age;
    
    public function __construct($n){
        $this->name = $n;
        echo "I am a new person. My name is: " . $n . "<br>";
    }
    
}
?>