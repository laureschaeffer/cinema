<?php
// -------------------heritage de la classe Personne---------------------

class Acteur extends Personne{
    protected array $filmsActeur;
    
    public function __construct($prenom, $nom, $sexe, $dateNaissance) {
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
        $this->filmsActeur = [];
        // $this->role->ajouterRoleCasting($this);
    }

    public function getFilmsActeur() : array
    {
        return $this->filmsActeur;
    }


    public function setFilmsActeur($filmsActeur)
    {
        $this->filmsActeur = $filmsActeur;

        return $this;
    }

    // -----------------------------------FONCTIONS----------------------------

    public function __toString(){
        return $this->prenom." ".$this->nom;
    }

// ajouter chaque objet film dans le tableau répértoriant les films d'un acteur 

    public function ajouterFilmActeur(Film $film) {
        $this->filmsActeur[] = $film;
    }

// afficher ce même tableau 

    public function afficherFilmographieActeur(){
        $result =  "<h1>Films de $this</h1>";
        foreach ($this->filmsActeur as $film) {
            $result .= $film."<br>";
        }
        return $result;
    }

}