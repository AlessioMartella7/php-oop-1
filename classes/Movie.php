<?php

class Movie {

    public $title;
    public $year;
    public $vote;
    public $language;
    public $genre;
    public $subGenre;

    function __construct(
        string $title,
        int $year,
        int $vote,
        string $language,
        Genre $genre,
        Genre $subGenre,
       
        )
    {
        $this->title = $title;
        $this->year = $year;
        $this->vote = $vote;
        $this->language = $language;
        $this->genre = $genre;
        $this->subGenre = $subGenre;
    }

    function rateMovie () {
        if($this->vote >=  6) {
            return 'Nice Movie!';
        } else return 'Better watch something else..';
        
    }
}