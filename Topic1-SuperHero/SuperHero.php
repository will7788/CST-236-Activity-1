<?php

class SuperHero{
    private $name;
    private $health;
    private $isDead;
    
    public function __construct($newname, $newhealth){
        $this->name = $newname;
        $this->health = $newhealth;
    }
    public function Attack($hero)
    {
        $damage = rand(1,10);
        $hero->Health($damage);
    }
    public function Health($damage){
        $this->health -= $damage;
        if ($this->health <= 0)
        {
            $this->isDead = true;
            echo "The superman has died.";
        }
    }
    public function isDead()
    {
        return $this->isDead;
    }
}

?>