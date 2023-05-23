<?php

class Appartenir {
    private Genre $genre;
    private Film $film;

    public function __construct(Genre $genre, Film $film) {
        $this->genre = $genre;
        $this->film = $film;
        $this->genre->addAppartenir($this);
        $this->film->addAppartenir($this);
    }

    public function getGenre() {
        return $this->genre;
    }
    public function setGenre($genre) {
        $this->genre = $genre;
        return $this;
    }

    public function getFilm() {
        return $this->film;
    }
    public function setFilm($film) {
        $this->film = $film;
        return $this;
    }
}