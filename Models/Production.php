<?php 

class Production {
    function __construct(public string $title, public string $language, public $vote , public Genre $genre )
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;

    }

    function setVote($vote){
        if ($this->vote > 10) {
            $vote= 'invalid';
            $this->vote = $vote;
        }
         
    }

    function setTitle($title){
        $title=ucwords($this->title);
        $this->title = $title;
    }
}