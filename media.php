<?php
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

    include('config.php');
    $sql = "SELECT * FROM movies";
    $result = $conn->query($sql);
    $movies = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($movies, new Movie($row['title'], $row['storyline'], $row['poster'], $row['yt_id']));
            // echo "<br>" . $row['title'] . "<br>" . $row['storyline'] . "<br>" . $row['poster'] . "<br>" . $row['yt_id'];
        }
    } else {
        echo "0 Results";
    }
?>