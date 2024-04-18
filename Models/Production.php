<?php 

class Production {
    function __construct(public string $title, public string $language, public $vote )
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }

    function setVote(){
        if ($this->vote > 10) {
            $this->vote = 'invalid';
        }
         
    }
}