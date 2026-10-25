<?php

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

?>