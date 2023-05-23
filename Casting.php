<?php

class Casting {
    private Film $film;
    private Role $role;
    private Acteur $acteur;


public function __construct(Film $film, Role $role, Acteur $acteur) {
    $this->film = $film;
    $this->film->ajouterCasting($this);
    $this->role = $role;
    $this->role->ajouterCasting($this);
    $this->acteur = $acteur;
    $this->acteur->ajouterCasting($this);
}

public function getFilm() {
    return $this->film;
}
public function setFilm(Film $film) {
    $this->film = $film;
    return $this;
}

public function getRole() {
    return $this->role;
}
public function setRole(Role $role) {
    $this->role = $role;
    return $this;
}

public function getActeur() {
    return $this->acteur;
}
public function setActeur(Acteur $acteur) {
    $this->acteur = $acteur;
    return $this;
}

}