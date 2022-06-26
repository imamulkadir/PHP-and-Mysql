<?php
    require 'connect.php';
    
    $id = $_GET["id"];
    
    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        //Output data of each row
        while ($row = $result->fetch_assoc()){
            $fname = $row["fname"];
            $lname = $row["lname"];
            $email = $row["email"];
        }
    } else {
        echo "0 results";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <form action="updateuser.php" method="post">
        <table width="300" border="0" cellspacing="1" cellpadding="1">
            <tr>
                <td>First Name: </td>
                <td><input type="text" name="fname" value="<?php echo $fname; ?>"></td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td><input type="text" name="lname" value="<?php echo $lname; ?>"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="update"></td>
            </tr>
        </table>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
    </form>
</body>
</html>