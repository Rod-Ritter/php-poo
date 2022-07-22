<?php

class Voiture extends Vehicule
{
    public int $nbrRoues = 4;
    private string $typeCarrosserie;

    public function getTypeCarrosserie(): string 
    {
       return $this->typeCarrosserie;
    }

    public function setTypeCarrosserie(string $typeCarrosserie): void
    {
        $this->typeCarrosserie = $typeCarrosserie;
    }

    // public function __construct(string $couleur)
    // {
    //     $this->couleur = $couleur;
    // }

    // public function getCouleur(): string
    // {
    //     return $this->couleur;
    // }

    // public function setCouleur(string $couleur): void {
    //     $this->couleur = $couleur;
    // }

    public function demarrer() {
        echo "<p>La voiture démarre</p>";
    }

    public function afficherCouleur(): string
    {
        return "<p>La voiture est de couleur " . $this->couleur . "</p>";
    }

    // public function __destruct()
    // {
    //     echo "<p>I'm doomed...</p>";
    // }
}