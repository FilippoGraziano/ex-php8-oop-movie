<?php

require_once "./db.php";

var_dump($movies);

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

    <?php

    // echo "Movie: " . $godfather->title . " </br> Year: " . $godfather->getYear() . ". </br>";
    // echo "Genres: ";
    // foreach ($godfatherGenres as $key => $genre) {

    //     $last_key = array_key_last($godfatherGenres);

    //     if ($key == $last_key) {
    //         echo $genre;
    //     } else echo "$genre, ";
    // }

    // echo "<hr>";

    // echo "Movie: " . $pulpFiction->title . " </br> Year: " . $pulpFiction->getYear() . ". </br>";
    // echo "Genres: ";
    // foreach ($pulpFictionGenres as $key => $genre) {

    //     $last_key = array_key_last($pulpFictionGenres);

    //     if ($key == $last_key) {
    //         echo $genre;
    //     } else echo "$genre, ";
    // }

    ?>

</body>

</html>