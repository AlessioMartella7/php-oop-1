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
        string $genre,
        )
    {
        $this->title = $title;
        $this->year = $year;
        $this->vote = $vote;
        $this->language = $language;
        $this->genre = $genre;
    }

    function rateMovies () {
        if($this->vote >=  6) {
            return 'Nice Movie!';
        } else return 'Better watch something else..';
        
    }
}

$theBlairWitchProject = new Movie ('The Blair Witch Project', 2000, 6 , 'en', 'horror');