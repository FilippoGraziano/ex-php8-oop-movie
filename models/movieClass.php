<?php

class Movie {

    use Money;

    public string $title;
    public int $year;
    public Genres $genresNames;
    public string $director;

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

?>