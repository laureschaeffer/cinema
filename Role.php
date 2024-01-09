<?php

class Role {
    private string $nomPersonnage;
    private array $castings;

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

    // public function ajouterRoleCasting(F){
    //     $this->castings[]=$film;
    // }
    // ajouter chaque objet film dans le tableau répértoriant les films d'un acteur 
}