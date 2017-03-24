<?php
    // Connection info for database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php_movies";

    // Connect to database and die if there is an error
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>