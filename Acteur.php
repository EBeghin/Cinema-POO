<?php

// héritage de la class Personne
class Acteur extends Personne {
    private array $castings;

    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance) {
        parent::__construct($prenom,$nom,$sexe,$dateNaissance);
        $this->castings = [];
    }

    public function filmographieActeur() {
        echo "<h4>Film(s) avec comme acteur " . $this . $this->getInfos() . " :</h4>"; // Appel le toString de $this (cet objet = acteur) 
        $listeFilm = "";
        foreach ($this->castings as $casting) {
            // $listeFilm .= $casting->getFilm()->getTitre() . "<br>"; // inutile de rajouter getTitre car c'est le toString de Film
            $listeFilm .= $casting->getFilm() . $casting->getFilm()->getInfos() . "<br>";
        }
        echo $listeFilm;
    }

    public function ajouterCasting(Casting $casting) {
        $this->castings[] = $casting;
    }

    public function __toString() {
        return $this->getPrenom(). " " .$this->getNom();
    }

    public function getInfos() { //concaténation des infos supp.
        return " (de sexe " .$this->getSexe(). ", né(e) le ".$this->getDateNaissance()->
        format("d.m.Y"). ")";
    }

    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function getSexe() {
        return $this->sexe;
    }
    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    public function getCastings() {
        return $this->castings;
    }
    public function setCasting($castings) {
        $this->castings = $castings;
        return $this;
    }
}