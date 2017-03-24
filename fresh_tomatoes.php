<?php
    // Include db connection info and the Movie class
    include('config.php');
    include('media.php');

    // Grab all movies from the database
    $sql = "SELECT * FROM movies";
    $result = $conn->query($sql);
    // Initialize empty array to push new Movie instances into
    $movies = array();
    // Loop through results, creating new Movie instances and pushing them into $movies array
    // $movies is accessed from index.php to populate the movie tiles
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($movies, new Movie($row['title'], $row['storyline'], $row['poster'], $row['yt_id']));
        }
    } else {
        echo "0 Results";
    }

    $conn->close();
?>