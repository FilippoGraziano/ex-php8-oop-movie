<?php

class Movie
{

    public string $title;
    public int $year;
    public Genres $genresNames;
    public string $director;

    function __construct(string $_title, int $_year, Genres $_genresNames, string $_director)
    {

        $this->title = $_title;
        $this->year = $_year;
        $this->genresNames = $_genresNames;
        $this->director = $_director;
    }

    function getYear()
    {
        return $this->year;
    }
};

class Genres
{

    protected array $names;

    function __construct(array $_names)
    {
        $this->names = $_names;
    }

    function getGenresNames()
    {
        return $this->names;
    }
}

$pulpFiction = new Movie("Pulp Fiction", 1994, new Genres(["Crime", "Thriller"]), "Quentin Tarantino");
$pulpFictionGenres = $pulpFiction->genresNames->getGenresNames();
$godfather = new Movie("The Godfather", 1972, new Genres(["Drammatic", "Crime"]), "Francis Ford Coppola");
$godfatherGenres = $godfather->genresNames->getGenresNames();

var_dump($pulpFiction);
var_dump($godfather);

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

    echo "Movie: " . $godfather->title . " </br> Year: " . $godfather->getYear() . ". </br>";
    echo "Genres: ";
    foreach ($godfatherGenres as $key => $genre) {

        $last_key = array_key_last($godfatherGenres);

        if ($key == $last_key) {
            echo $genre;
        } else echo "$genre, ";
    }

    echo "<hr>";

    echo "Movie: " . $pulpFiction->title . " </br> Year: " . $pulpFiction->getYear() . ". </br>";
    echo "Genres: ";
    foreach ($pulpFictionGenres as $key => $genre) {

        $last_key = array_key_last($pulpFictionGenres);

        if ($key == $last_key) {
            echo $genre;
        } else echo "$genre, ";
    }

    ?>

</body>

</html>