<?php

require __DIR__ . "/movies.php";

// Senza Costruttore
// $movie = new Movies();
// $movie->genre = "Azione";
// $movie->duration = "2 ore";


$movie = new Movies("Azione", "2 ore");

var_dump($movie);
echo "<br>";
echo "<br>";
echo $movie->getMovies();