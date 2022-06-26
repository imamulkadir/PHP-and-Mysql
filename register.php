<?php
    require 'connect.php';

    $fname = val($_POST["fname"]);
    $lname = val($_POST["lname"]);
    $email = val($_POST["email"]);

    function val($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $sql = "INSERT into users (fname, lname, email) VALUES ('$fname', '$lname', '$email')";

    if($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "Data inserted successfully! ID: ".$last_id;
    } else {
        echo "Failed to insert data! ->" .$sql."<br>".$conn->error;
    }

    $conn->close();


?>