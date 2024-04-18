<?php 

class Production {
    function __construct(public string $title, public string $language, public $vote , public Genre $genre )
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;

    }

    function setVote(){
        if ($this->vote > 10) {
            $this->vote = 'invalid';
        }
         
    }

    function setTitle(){
        $this->title = ucwords($this->title);
    }
}