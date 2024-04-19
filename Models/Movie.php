<?php 

class Movie extends Production{
    public function __construct($title , $language , $vote , $genre ,public $profits, public $duration )
    {
        parent::__construct($title , $language , $vote , $genre);
        $this->profits = $profits;
        $this->duration = $duration;
    }
}