<?php

class Voiture {
    public string $marque;
    public string $couleur;
    public int $nbrRoues = 4;

    public function demarrer() {
        echo "<p>la voiture démarre</p>";
    }

    public function afficherCouleur() {
        echo "<p>La voiture est de couleur" .$this->couleur . "</p>";
    }
}