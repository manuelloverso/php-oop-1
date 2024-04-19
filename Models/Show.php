<?php 

class Show extends Production{
    public function __construct($title , $language , $vote , $genre , public $seasons)
    {
        parent::__construct($title , $language , $vote , $genre);
        $this->seasons = $seasons;
    }
}