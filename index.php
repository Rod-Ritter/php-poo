<?php

// Fonction permettant le chargement automatique des classes
spl_autoload_register(function ($className) {
    require_once './classes/' . $className . '.php';
});





$voiture1 = new Voiture("orange");
$voiture1->setMarque("BMW");
$voiture1->setVitesse((50));
$voiture1->setMasse((1200));
echo $voiture1->calculerEnergieCinetique() . " Joules<br />";
$voiture1->setVitesse((60));
echo $voiture1->calculerEnergieCinetique() . " Joules<br />";

