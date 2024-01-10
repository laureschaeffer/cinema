<?php
// -------------------heritage de la classe Personne---------------------

class Acteur extends Personne{
    private array $castings;

    
    public function __construct($prenom, $nom, $sexe, $dateNaissance) {
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
        $this->castings=[];
    }


    // -----------------------------------FONCTIONS----------------------------
    public function getRole()
    {
        return $this->role;
    }


    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }


    public function getFilm()
    {
        return $this->film;
    }


    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }

    public function __toString(){
        return $this->prenom." ".$this->nom;
    }

    // ----------------------fonctions-------------------------------
    public function ajouterActeurCasting(Casting $casting){
        $this->castings[] = $casting;
    }
        // ajouter chaque objet acteur dans le tableau Casting qui va répertorier acteur, role, nom du film

    public function afficherFilmographieActeur(){
        $result =  "<h2>Films dans lequel $this a joué </h2>";
        foreach ($this->castings as $casting) {
            $result .= "<p class='text'>".$casting->getFilm(). " - dans le rôle de ". $casting->getRole()."</p> <br>";
        }
        return $result;
    } 

}