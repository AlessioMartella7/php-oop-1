<?php

class Genre {
    public $name;
    
    function __construct(
        $name,
        )
    {
        $this->name = $name;
    }

    function getGenre () {
        return 'Genre:'.' '.$this->name;
    }
}