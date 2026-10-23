<?php

class Movie {

    public string $title;
    public int $year;
    public string $director;

    function __construct(string $_title, int $_year, string $_director) {

        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;

    }

};

$pulpFiction = new Movie("Pulp Fiction", 1994, "Quentin Tarantino");
$godfather = new Movie("The Godfather", 1972, "Francis Ford Coppola");

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
</body>

</html>