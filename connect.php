<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newsite";

    //Create Connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Check Connection
    if ($conn->connect_error) {
        die("connection Failed: ". $conn->connect_error);
    }

    // echo "Connected Successfully!";
?>

