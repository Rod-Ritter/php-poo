<?php

require_once './classes/Voiture.php';

$voiture1 = new Voiture();
$voiture1->couleur = "rouge";
$voiture1->marque = "bmw";
$couleurVoiture1 = $voiture1->afficherCouleur();


$voiture2 = new Voiture();
$voiture2->couleur = "vert";
$voiture2->marque = "ferrari";
$voiture2->demarrer();

var_dump($voiture1);
echo "<br />";
var_dump($voiture2);
echo $couleurVoiture1;




