<?php
    require 'connect.php';

    if(isset($_GET["message"])) {
        if(($_GET["message"]) == "delete") {
            echo "Record Deleted! <br> <br>";
        };
        if(($_GET["message"]) == "success") {
            echo "Record Updated! <br> <br>";
        };
    }

    $sql = "SELECT id, fname, lname, email FROM users";
    $result = $conn->query($sql);

?>

<table width="300" border="0" cellspacing="1" cellpadding="1">
    <?php
    if($result->num_rows>0){
        //Output data of each row
        while ($row = $result->fetch_assoc()){
    ?>
        <tr>
            <td>ID</td>
            <td><?php echo $row["id"]; ?></td>
            <td>
                <a href="deluser.php?id=<?php echo $row["id"] ?>">Delete</a> 
                <br> 
                <a href="update.php?id=<?php echo $row["id"] ?>">Update</a>
            </td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><?php echo $row["fname"]; ?></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $row["lname"]; ?></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $row["email"]; ?></td>
            <td>&nbsp;</td>
        </tr>

        <?php

        }

        ?>

</table>

<?php

    } else {
        echo "0 results";
}

$conn->close();
?>