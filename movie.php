<?php 

class Movie {

    private $title;
    private $duration;
    private $genre;
    
    function __construct($_title, $_duration, $_genre)
    {

        $this->setTitle($_title);
        $this->setDuration($_duration);
        $this->setGenre($_genre);

    }

    private function setGenre($_genre){
        if(is_string($_genre))
            $this->genre=$_genre;
    }

    private function setDuration($_duration){
        if(is_string($_duration))
            $this->duration=$_duration;
    }

    private function setTitle($_title){
        if(is_string($_title))
            $this->title=$_title;
    }
}
