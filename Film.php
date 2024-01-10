<?php

class Film{
    private Genre $genre;
    private Realisateur $realisateur;
    private string $titreFilm;
    private int $anneeSortieFilm;
    private int $dureeFilm;
    private string $resume;
    private array $castings;


// je relie l'objet Genre et réalisateur pour pouvoir ajouter chaque film à son genre et son real

    public function __construct(Genre $genre, Realisateur $realisateur, string $titreFilm, int $anneeSortieFilm, int $dureeFilm, string $resume){
        $this->genre=$genre;
        $this->realisateur=$realisateur;
        $this->titreFilm=$titreFilm;
        $this->anneeSortieFilm=$anneeSortieFilm;
        $this->dureeFilm=$dureeFilm;
        $this->resume=$resume;
        $this->genre->ajouterGenreFilm($this);
        $this->realisateur->ajouterFilmRealisateur($this);
        $this->castings=[];

    }
// grâce aux 2 fonction ajouter...Film directement dans le construct, l'objet film se met automatiquement dans mes tableaux présents dans leur Class
    
        public function getGenre() : Genre
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    public function getRealisateur() : Realisateur
    {
        return $this->realisateur;
    }


    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    public function getTitreFilm() : string
    {
        return $this->titreFilm;
    }


    public function setTitreFilm($titreFilm)
    {
        $this->titreFilm = $titreFilm;

        return $this;
    }


    public function getAnneeSortieFilm() : int
    {
        return $this->anneeSortieFilm;
    }

 
    public function setAnneeSortieFilm($anneeSortieFilm)
    {
        $this->anneeSortieFilm = $anneeSortieFilm;

        return $this;
    }


    public function getDureeFilm() : int
    {
        return $this->dureeFilm;
    }


    public function setDureeFilm($dureeFilm)
    {
        $this->dureeFilm = $dureeFilm;

        return $this;
    }


    public function getResume() : string
    {
        return $this->resume;
    }


    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }



    // ---------------------------------------FONCTIONS--------------------------------
        
    public function __toString(){
        return $this->titreFilm." (".$this->anneeSortieFilm.")";
    }

    public function afficherInfoFilm(){
        return $this." est un film de genre ".$this->genre." réalisé par ".$this->realisateur.", il dure ".$this->dureeFilm." minutes, et voici le résumé :<br>".$this->resume;
    }


    public function ajouterFilmCasting(Casting $casting) {
        $this->castings[]=$casting;
    }

        // ajouter chaque objet film dans le tableau Casting qui va répertorier acteur, role, nom du film

    // public function afficherRoleActeur(){
    //     return $this->role->getNomPersonnage();
    // }


}