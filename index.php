<?php

require_once './classes/Voiture.php';
require_once './functions/echoP.php';

$voiture1 = new Voiture("blue");
// $voiture1->couleur = "rouge";
// $voiture1->marque = "bmw";
// $couleurVoiture1 = $voiture1->afficherCouleur();

$voiture1->setMarque("bmw");
echoP( $voiture1->getMarque());
// $voiture1->setColor("blue");
echoP( $voiture1->getcolor());


$voiture2 = new Voiture("red");
echoP($voiture2->getcolor());

// $voiture2->couleur = "vert";
// $voiture2->marque = "ferrari";
// $voiture2->demarrer();


// var_dump($voiture1);
// echo "<br />";
// var_dump($voiture2);
// echo $couleurVoiture1;




