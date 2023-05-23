<?php

class Personne {
    protected string $prenom;
    protected string $nom;
    protected string $sexe;
    protected DateTime $dateNaissance;
    protected array $films;

    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->films = [];
    }

    public function ajouterFilm(Film $film) {
        $this->films[] = $film;
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

    public function getFilms() {
        return $this->films;
    }
    public function setFilms(array $films) {
        $this->films = $films;
    }
}