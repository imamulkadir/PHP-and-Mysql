<?php
    require 'connect.php';

    $fname = val($_POST["fname"]);
    $lname = val($_POST["lname"]);
    $email = val($_POST["email"]);
    $id = val($_POST["id"]);

    function val($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $sql = "UPDATE users SET fname='$fname', lname='$lname', email='$email' WHERE id='$id'";

    if($conn->query($sql) === TRUE) {
        header("location:delete.php?message=success&id=".$id);
    } else {
        echo "Error epdating record".$conn->error;
    }


$conn->close();
?>