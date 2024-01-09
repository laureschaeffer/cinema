<?php

class Genre {
    private string $nomGenre;
    private array $genreFilms;

    public function __construct(string $nomGenre){
        $this->nomGenre=$nomGenre;
        $this->genreFilms= [];
    }

    
    public function getNomGenre() : string
    {
        return $this->nomGenre;
    }


    public function setNomGenre($nomGenre)
    {
        $this->nomGenre = $nomGenre;

        return $this;
    }



// -------------------------------FONCTIONS----------------------------------------

    public function __toString(){
        return $this->nomGenre;
    }

// ajouter chaque objet film dans le tableau répértoriant les films d'un genre 

    public function ajouterGenreFilm(Film $film) {
        $this->genreFilms[] = $film;
    }
// afficher ce même tableau 

    public function afficherFilmographieGenre(){
        $result =  "<h1>Films de $this</h1>";
        foreach ($this->genreFilms as $film) {
            $result .= $film."<br>";
        }
        return $result;
    }


}