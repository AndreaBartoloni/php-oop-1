<?php

class Movies
{
    public $name;
    public $genre;
    public $duration;


    public function __construct($genere, $durata)
    {
        $this->genre = $genere;
        $this->duration = $durata;

    }

    public function getMovies()
    {
        $results = $this->genre . ", " . $this->duration;
        return $results;
    }


}
