<?php

    class NextFilm{

        public $title;
        public $days;
        public $release;
        public $type;
        public $following_production;
        public $poster;

        function __construct($title, $days, $release, 
        $type, $following_production, $poster) {
            $this->title = $title;
            $this->days= $days;
            $this->release = $release;
            $this->type = $type;
            $this->following_production = $following_production;
            $this->poster = $poster;
            
        }


    }



    
?>