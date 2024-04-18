<?php 

class Production {
    function __construct(public string $title, public string $language, public int $vote )
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }
}