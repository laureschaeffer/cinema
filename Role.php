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

    public function __toString(){
        return $this->nomPersonnage;
    }

    public function ajouterRoleCasting(Acteur $acteur){
        $this->castings[]=$acteur;
    }
    // ajouter chaque objet acteur dans le tableau Casting répertoriant acteur, role, film

    public function afficherRoleActeur(){
        $result =  "<h1>Acteurs ayant interprétés $this</h1>";
        foreach ($this->castings as $acteur) {
            $result .= $acteur."<br>";
        }
        return $result;
    }
    // afficher les acteurs qui ont interprete ce role
}