<?php

class Movie {

    public string $title;
    public int $year;
    public Genres $genresNames;
    public string $director;
    use Money;

    function __construct(string $_title, int $_year, Genres $_genresNames, string $_director, string $_budget, string $_worldWideBoxOffice) {

        $this->title = $_title;
        $this->year = $_year;
        $this->genresNames = $_genresNames;
        $this->director = $_director;
        $this->setBudget($_budget);
        $this->setWorldWide($_worldWideBoxOffice);
    }

    function getYear() {
        return $this->year;
    }
};

class Genres {

    protected array $names;

    function __construct(array $_names) {
        $this->names = $_names;
    }

    function setGenresNames(string $name) {
        return array_push($this->names, $name);
    }

    function getGenresNames() {
        return $this->names;
    }
}

trait Money {

    protected string $budget;
    protected string $worldWideBoxOffice;

    function setBudget( string $_budget) {
        return $this -> budget = $_budget;
    }

    function setWorldWide( string $_worldWideBoxOffice) {
        return $this -> worldWideBoxOffice = $_worldWideBoxOffice;
    }

    function getBudget() {
        return $this -> budget;
    }

    function getWorldWide() {
        return $this -> worldWideBoxOffice;
    }

}

$godfather = new Movie("The Godfather", 1972, new Genres(["Drama", "Crime"]), "Francis Ford Coppola", "$6,000,000", "$250,000,000+");
$godfatherGenres = $godfather->genresNames->getGenresNames();

$pulpFiction = new Movie("Pulp Fiction", 1994, new Genres(["Crime", "Thriller"]), "Quentin Tarantino", "$8,500,000", "$213,900,000");
$pulpFictionGenres = $pulpFiction->genresNames->getGenresNames();

$inception = new Movie("Inception", 2010, new Genres(["Sci-Fi", "Action"]), "Christopher Nolan", "$160,000,000", "$839,000,000");
$inceptionGenres = $inception->genresNames->getGenresNames();

$lifeIsBeutiful = new Movie("La vita è bella", 1997, new Genres(["Comedy-Drama", "Historical"]), "Roberto Benigni", "$20,000,000", "$229,300,000");
$lifeIsBeutifulGenres = $lifeIsBeutiful->genresNames->getGenresNames();

$shining = new Movie("The Shining", 1980, new Genres(["Horro", "Psychological Thriller"]), "Stanley Kubrick", "$19,000,000", "$47,300,000");
$shiningGenres = $shining->genresNames->getGenresNames();

var_dump($shining)

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