<?php
    // declaring variables
    $host = "192.168.1.35";
    $user = "blogs";
    $pass = "Qn88ymTaxZnYP4tEA7UWTqZfRnxhS7FAexWSCGfaRsCeataDjeJwj6wYcfw4ED2F";
    $db = "blogs";
    // creating connection to database
    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connection succesful!";
?>