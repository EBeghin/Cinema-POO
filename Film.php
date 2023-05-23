<?php

class Film {
    private string $titre;
    private int $duree;
    private DateTime $dateSortie;
    private Realisateur $realisateur;
    private array $genres; //vérifier si plusieurs genres
    private array $castings;
    private array $appartenir;

    public function __construct(string $titre, int $duree, string $dateSortie, Realisateur $realisateur) {
        $this->titre = $titre;
        $this->duree = $duree;
        $this->dateSortie = new DateTime($dateSortie);
        $this->realisateur = $realisateur;
        $this->realisateur->ajouterFilm($this);
        $this->genres = [];
        $this->castings = [];
        $this->appartenir = [];
    }

    public function addAppartenir(Appartenir $appartenir) {
        $this->appartenir[] = $appartenir;
    }

    // public function ajouterGenre($genre) {
    //     $this->genres[] = $genre;
    // }

    public function ajouterCasting(Casting $casting) {
        $this->castings[] = $casting;
    }

    public function afficherDistribution() {
        echo "<h4>Le casting du film " .$this->getTitre().$this->getInfos(). " est :</h4>";
        $listeCasting = "";
        foreach ($this->castings as $casting) {
            $listeCasting .= $casting->getActeur(). $casting->getActeur()->getInfos(). " dans le role de ".$casting->getRole() ."<br>";
        }
        echo $listeCasting;
    }

    public function __toString() { // eviter de charger le toString !!
        return $this->getTitre() ;
    }

    public function getInfos() { //concaténation des infos supp.
        return " (d'une durée de ".$this->getDuree(). " minutes, sorti en France le ".$this->getDateSortie()->
        format("d.m.Y"). " réalisé par ".$this->realisateur. ")";
    }

    public function getTitre() {
        return $this->titre;
    }
    public function setTitre(string $titre)
    {
        $this->titre = $titre;
        return $this;
    }

    public function getDuree() {
        return $this->duree;
    }
    public function setDuree(int $duree) {
        $this->duree = $duree;
        return $this;
    }

    public function getDateSortie() {
        return $this->dateSortie;
    }
    public function setDateSortie(DateTime $dateSortie) {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    public function getRealisateur() {
        return $this->realisateur;
    }
    public function setRealisateur(string $realisateur) {
        $this->realisateur = $realisateur;
        return $this;
    }

    public function getGenres() {
        return $this->genres;
    }
    public function setGenres(array $genres) {
        $this->genres = $genres;
        return $this;
    }

    public function getCastings() {
        return $this->castings;
    }
    public function setCastings($castings) {
        $this->castings = $castings;
        return $this;
    }

    public function getAppartenir() {
        return $this->appartenir;
    }
    public function setAppartenir($appartenir) {
        $this->appartenir = $appartenir;
        return $this;
    }
}

