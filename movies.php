<?php

class Movies
// ATTRIBUTI
{
    public $name;
    public $genre;
    public $duration;

    //METODO
    public function __construct($nome, $genere, $durata) // creiamo dei parametri e li assoceremo alle variabili corrette
    {
        $this->name = $nome;
        $this->genre = $genere;
        $this->duration = $durata;

    }
    //METODO
    public function getMovies() // funzione dove stampare genere e durata del film
    {
        $results = $this->name. "," . $this->genre . ", " . $this->duration;
        return $results;
    }


}
