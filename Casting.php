<?php

class Casting {
    private Acteur $acteur;
    private Role $role;
    private Film $film;

    public function __construct(Acteur $acteur, Role $role, Film $film){
        $this->acteur=$acteur;
        $this->acteur->ajouterActeurCasting($this);
        $this->role=$role;
        $this->role->ajouterRoleCasting($this);
        $this->film=$film;
        $this->film->ajouterFilmCasting($this);
    }

    public function getActeur() : Acteur
    {
        return $this->acteur;
    }


    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }


    public function getRole() : Role
    {
        return $this->role;
    }


    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }


    public function getFilm() : Film
    {
        return $this->film;
    }


    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }

//    --------------------FONCTIONS----------------------


   public function afficherInfoCasting(){
        return "Dans le film $this->film l'acteur $this->acteur a joué $this->role";
   }
}