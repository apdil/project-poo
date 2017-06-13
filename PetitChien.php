<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PetitChien
 *
 * @author apdil
 */
class PetitChien {
    public $nom;
    public $race;
    public $dateNaissance;
    public $couleur;
    
    
    public function aboyer(){
        echo 'Wouaf Wouaf Wouaf';
    }
    
    public function __toString() {
        return 'le nom ' .$this->nom. ' la race est ' .$this->race.
               ' la naissance ' .$this->dateNaissance. ' la couleur ' .$this->couleur;
    }
    
    public function __construct($nom, $race, $dateNaissance, $couleur) {
        $this-> nom = $nom;
        $this-> race = $race;
        $this-> dateNaissance = $dateNaissance;
        $this-> couleur = $couleur;
    }
}

