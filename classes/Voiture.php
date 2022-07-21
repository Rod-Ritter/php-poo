<?php

class Voiture {
    public string $marque;
    private string $couleur;
    public int $nbrRoues = 4;

    public function demarrer() {
        echo "<p>la voiture démarre</p>";
    }

    public function afficherCouleur() {
        return "<p>La voiture est de couleur " .$this->couleur . "</p>";
    }
}