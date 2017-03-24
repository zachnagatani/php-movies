<?php
    // Movie class for each movie
    // Movies are pulled from database and constructed from this class
    class Movie {
        public $title;
        public $storyline;
        public $poster;
        public $yt_id;

        public function __construct($title, $storyline, $poster, $yt_id) {
            $this->title = $title;
            $this->storyline = $storyline;
            $this->poster = $poster;
            $this->yt_id = $yt_id;
        }
    }
?>