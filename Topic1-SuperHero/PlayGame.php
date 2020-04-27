<?php
include_once 'SuperHero.php';
include_once 'Batman.php';
include_once 'Superman.php';

$batman = new Batman("Batman",rand(1, 1000));
$superman = new Superman("Superman",rand(1, 1000));

while (!$batman->isDead() && !$superman->isDead())
{
    $batman->Attack($superman);
    $superman->Attack($batman);
}

?>