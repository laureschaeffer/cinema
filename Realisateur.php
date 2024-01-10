<?php

// -------------------heritage de la classe Personne---------------------

class Realisateur extends Personne{
    private array $filmsRealisateur;


    public function __construct($prenom, $nom, $sexe, $dateNaissance) {
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
        $this->filmsRealisateur = [];
    }


    public function getFilmsRealisateur() : array
    {
        return $this->filmsRealisateur;
    }


    public function setFilmsRealisateur($filmsRealisateur)
    {
        $this->filmsRealisateur = $filmsRealisateur;

        return $this;
    }

    // ---------------------------FONCTIONS-----------------------------------

    public function __toString(){
        return $this->prenom." ".$this->nom;
    }


// ajouter chaque objet film dans le tableau répértoriant les films d'un réalisateur 

    public function ajouterFilmRealisateur(Film $film) {
        $this->filmsRealisateur[] = $film;
    }

// afficher ce même tableau 

    public function afficherFilmographieRealisateur(){
        $result =  "<h2>Films de $this</h2>";
        foreach ($this->filmsRealisateur as $film) {
            $result .= "<p class='text'>".$film." </p> <br>";
        }
        return $result;
    }



}