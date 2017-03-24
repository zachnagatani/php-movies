<?php
    class Movie {
        public $title;
        public $storyline;
        public $poster;
        public $trailer_url;

        public function __construct($title, $storyline, $poster, $trailer_url) {
            $this->title = $title;
            $this->storyline = $storyline;
            $this->poster = $poster;
            $this->trailer_url = $trailer_url;
        }
    }
?>