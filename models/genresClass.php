<?php

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

?>