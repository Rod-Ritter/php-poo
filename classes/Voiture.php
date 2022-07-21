<?php

class Voiture {
    private string $marque;
    private string $couleur;
    public int $nbrRoues = 4;

    public function __construct(string $couleur)
    {
       $this->couleur = $couleur; 
    }
    // Méthode pour récupérer la marque
    public function getMarque(): string 
    {
        return $this->marque;
    }
    // Methode pour définir la marque 
    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    public function getColor(): string 
    {
        return $this->couleur;
    }

    public function setColor(string $couleur): void 
    {
        $this->couleur = $couleur;
    }

    public function demarrer() 
    {
        echo "<p>la voiture démarre</p>";
    }

    public function afficherCouleur() 
    {
        return "<p>La voiture est de couleur " .$this->couleur . "</p>";
    }
}