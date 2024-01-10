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
        $result =  "<h2>Films de $this</h2>";
        foreach ($this->genreFilms as $film) {
            $result .= "<p class='text'>".$film."</p> <br>";
        }
        return $result;
    }


}