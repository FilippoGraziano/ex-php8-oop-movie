<?php

require_once "./db.php";

// il commento qui sotto serve a dire a vs code che la variabile movie esiste perchè mi da un errore anche se il file è collegato bene
/** @var Movie[] $movies */ // <-- Questo dice a VS Code: "$movies esiste ed è un array di oggetti Movie"

// var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop movie</title>
</head>

<body>
    <h1>Movies</h1>

    <hr>

    <ul>
        <?php

            foreach ($movies as $movieKey => $movie) {

                $movieLastKey = array_key_last($movies);

                $genres = $movie->genresNames->getGenresNames();

                echo "<li>";

                    echo "<strong>Title</strong>: " . $movie->title . "</br>";
                    echo "<b>Director</b>: " . $movie->director . "</br>";
                    echo "<b>Year of publication</b>: " . $movie->year . "</br>";
                    echo "<b>Genres</b>: ";

                    foreach($genres as $genreKey => $genre){
                        $genreLastKey = array_key_last($genres);

                        if ($genreKey == $genreLastKey) {
                            echo $genre;
                        } else echo $genre . ", ";
                    }

                    echo "</br>";
                    echo "<b>Budget</b>: " . $movie->getBudget() . "</br>";
                    echo "<b>World wide box office</b>: " . $movie->getWorldWide() . "</br>";

                echo "</li>";
                
                if ($movieKey != $movieLastKey) echo "<hr>";
            }

        ?>
    </ul>

</body>

</html>