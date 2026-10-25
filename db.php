<?php

require_once './models/moneyTrait.php';

require_once "./models/genresClass.php";
require_once "./models/movieClass.php";

$godfather = new Movie("The Godfather", 1972, new Genres(["Drama", "Crime"]), "Francis Ford Coppola", "$6,000,000", "$250,000,000+");

$pulpFiction = new Movie("Pulp Fiction", 1994, new Genres(["Crime", "Thriller"]), "Quentin Tarantino", "$8,500,000", "$213,900,000");

$inception = new Movie("Inception", 2010, new Genres(["Sci-Fi", "Action"]), "Christopher Nolan", "$160,000,000", "$839,000,000");

$lifeIsBeautiful = new Movie("The life is Beatiful", 1997, new Genres(["Comedy-Drama", "Historical"]), "Roberto Benigni", "$20,000,000", "$229,300,000");

$shining = new Movie("The Shining", 1980, new Genres(["Horro", "Psychological Thriller"]), "Stanley Kubrick", "$19,000,000", "$47,300,000");

$movies = [
    $godfather,
    $pulpFiction,
    $inception,
    $lifeIsBeautiful,
    $shining
];

?>