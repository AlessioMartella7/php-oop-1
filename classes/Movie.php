<?php

class Movie {

    public $title;
    public $year;
    public $vote;
    public $language;
    public $genre;

    function __construct($title, $year, $vote, $language, $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->vote = $vote;
        $this->language = $language;
        $this->genre = $genre;
    }

}