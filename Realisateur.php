<?php

// héritage de la class Personne
class Realisateur extends Personne {
    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance) {
        parent::__construct($prenom,$nom,$sexe,$dateNaissance);
    }

    public function filmographieRealisateur() {
        echo "<h4>Film(s) réalisé(s) par " . $this . $this->getInfos() . " :</h4>"; // appel le toString de $this (cet objet = realisateur) + ses infos
        $listeFilm = "";
        foreach ($this->films as $film) {
            $listeFilm .= $film . $film->getInfos() . "<br>"; // récupère le toString de film + ses infos
        }
        echo $listeFilm;
    }

    public function __toString() {
        return $this->getPrenom(). " " .$this->getNom();
    }

    public function getInfos() { //concaténation des infos supp.
        return " (de sexe " .$this->getSexe(). ", né(e) le ".$this->getDateNaissance()->format("d.m.Y") . ") ";
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
}