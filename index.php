<?php

require __DIR__ . "/movies.php"; // includere pagina esterna
require __DIR__ . "/data.php"; // includere pagina esterna

// Senza Costruttore
// $movie = new Movies();
// $movie->genre = "Azione";
// $movie->duration = "2 ore";

// $movies = new Movies("Genere: Azione", "Durata: 2 ore"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <h2>Dettagli Film</h2>
        <?php foreach($movies as $movie){ ?>  
            
            <div>
                
                <div>
                    <?php echo $movie->name ?>
                </div>
                <div>
                    <?php echo $movie->genre ?>
                </div>
                <div>
                    <?php echo $movie->duration ?>
                </div>
                <br>

            </div>

        <?php } ?>
      
    </div>
    

</body>
</html>