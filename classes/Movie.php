<?php

class Movie {

    public $title;
    public $year;
    public $vote;
    public $language;
    public $genre;

    function __construct(
        string $title,
        int $year,
        int $vote,
        string $language,
        Genre $genre,
        )
    {
        $this->title = $title;
        $this->year = $year;
        $this->vote = $vote;
        $this->language = $language;
        $this->genre = $genre;
    }

    function rateMovie () {
        if($this->vote >=  6) {
            return 'Nice Movie!';
        } else return 'Better watch something else..';
        
    }
}