<?php

class Role {
    private string $nomPersonnage;

    public function __construct(string $nomPersonnage){
        $this->nomPersonnage=$nomPersonnage;
        $this->castings= [];
    }

    

    public function getNomPersonnage() : string
    {
        return $this->nomPersonnage;
    }


    public function setNomPersonnage($nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;

        return $this;
    }


    public function getCastings() : array
    {
        return $this->castings;
    }


    public function setCastings($castings)
    {
        $this->castings = $castings;

        return $this;
    }

// -------------------------FONCTIONS--------------------------------

    public function __toString(){
        return $this->nomPersonnage;
    }

    public function ajouterRoleCasting(Casting $casting){
        $this->castings[] = $casting;
    }
    // ajouter chaque objet role dans le tableau Casting qui va répertorier acteur, role, nom du film

    public function afficherRole(){
        $result =  "<h1>Liste des acteurs ayant interprétés $this </h1>";
        foreach ($this->castings as $film) {
            $result .= $film."<br>";
        }
        return $result;
    }
//  il faut refaire cette fonction
}