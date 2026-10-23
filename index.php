<?php

class Movie {

    public string $title;
    public int $year;
    public Genre $genreName;
    public string $director;

    function __construct(string $_title, int $_year, Genre $_genreName, string $_director) {

        $this->title = $_title;
        $this->year = $_year;
        $this->genreName = $_genreName;
        $this->director = $_director;

    }

    function getYear() {
        return $this -> year;
    }

};

class Genre {

    protected string $name;

    function __construct(string $_name) {
        $this -> name = $_name;
    }

    function getGenreName() {
        return $this -> name;
    }

}

$pulpFiction = new Movie("Pulp Fiction", 1994, new Genre("Crime"),"Quentin Tarantino");
$godfather = new Movie("The Godfather", 1972, new Genre("Drammatic"),"Francis Ford Coppola");

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

    <?php
    
    echo "Publication year of " . $godfather->title . " is " . $godfather->getYear() . ". And the genre is " . $godfather->genreName->getGenreName();
    echo "</br>";
    echo "Publication year of " . $pulpFiction->title . " is " . $pulpFiction->getYear() . ". And the genre is " . $pulpFiction->genreName->getGenreName();

    ?>

</body>

</html>