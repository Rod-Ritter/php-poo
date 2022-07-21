<?php

require_once './classes/Voiture.php';

$voiture1 = new Voiture();
$voiture1->couleur = "rouge";
$voiture1->marque = "bmw";

$voiture2 = new Voiture();
$voiture2->couleur = "vert";
$voiture2->marque = "ferrari";

var_dump($voiture1);
echo "<br>";
var_dump($voiture2);

