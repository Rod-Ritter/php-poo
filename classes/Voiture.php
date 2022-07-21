<?php

class Voiture {
    private string $marque;
    public string $couleur;
    public int $nbrRoues = 4;
    // Méthode pour récupérer la marque
    public function getMarque(): string {
        return $this->marque;
    }
    // Methode pour définir la marque 
    public function setMarque(string $marque): void {
        $this->marque = $marque;
    }

    public function demarrer() {
        echo "<p>la voiture démarre</p>";
    }

    public function afficherCouleur() {
        return "<p>La voiture est de couleur " .$this->couleur . "</p>";
    }
}