<?php

class Role {
    private string $nomRole;
    private array $castings;

    public function __construct(string $nomRole) {
        $this->nomRole = $nomRole;
        $this->castings = [];
    }

    public function ajouterCasting(Casting $casting) {
        $this->castings[] = $casting;
    }

    public function listeActeur() {
        echo "<h4>Les acteurs ayant joué le rôle de " . $this . " sont :</h4>"; // Appel le toString de $this (cet objet = role) 
        $listeFilm = "";
        foreach ($this->castings as $casting) {
            $listeFilm .= $casting->getActeur() . $casting->getActeur()->getInfos() . "<br>";
        }
        echo $listeFilm;
    }

    public function getNomRole() {
        return $this->nomRole;
    }
    public function setNomRole($nomRole) {
        $this->nomRole = $nomRole;
        return $this;
    }

    public function getCastings() {
        return $this->castings;
    }
    public function setCastings($castings) {
        $this->castings = $castings;
        return $this;
    }

    public function __toString() {
        return $this->getNomRole();
    }
}