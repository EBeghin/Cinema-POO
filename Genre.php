<?php

class Genre {
    private string $nomGenre;
    private array $appartenirs;

    public function __construct(string $nomGenre) {
        $this->nomGenre = $nomGenre;
        $this->appartenirs = [];
    }

    public function listeFilmGenre() {
        echo "<h4>Le genre " . $this .  " est associé au(x) film(s) suivant(s) :</h4>"; // Appel le toString de $this (cet objet = Genre) 
        $listeFilmGenre = "";
        foreach ($this->appartenirs as $appartenir) {
            $listeFilmGenre .= $appartenir->getFilm() . $appartenir->getFilm()->getInfos() . "<br>";
        }
        echo $listeFilmGenre;
    }

    public function addAppartenir(Appartenir $appartenir) {
        $this->appartenirs[] = $appartenir;
    }

    public function getNomGenre() {
        return $this->nomGenre;
    }
    public function setNomGenre($nomGenre) {
        $this->nomGenre = $nomGenre;
        return $this;
    }

    public function __toString() {
        return $this->nomGenre;
    }

}