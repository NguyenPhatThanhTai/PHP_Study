<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Let do it</title>
</head>
<body>
    <h3 style="color: red">Add into database</h3>
    <form style="text-align: center; padding: 20px" action="Conect_Test.php" method="post">
        <input type="text" placeholder="Username" name="Username"><br>
        <input type="text" placeholder="Fullname" name="Fullname"><br>
        <input type="password" placeholder="Password" name="Password"><br>
        <input type="text" placeholder="Email" name="Email"><br>
        <input type="text" placeholder="PhoneNumber" name="PhoneNumber"><br>
        <input type="submit" value="Add +">
    </form>
</body>
<?php
    $Host = 'localhost:3366';
    $Username = 'root';
    $Password = '';
    $Database_Name = 'firstdata';

    $Conn = mysqli_connect($Host, $Username, $Password, $Database_Name);

    if (!$Conn){
        echo "Connect Fail";
    }else{
        echo "Connect Success";
    }

    if (isset($_POST["Username"])){
        $Querry = "INSERT INTO infdata(UserName, FullName, Password, Email, PhoneNum) VALUES ('".$_POST["Username"]."', '".$_POST["Fullname"]."',
                            '".$_POST["Password"]."', '".$_POST["Email"]."', '".$_POST["PhoneNumber"]."')";
        $result = mysqli_query($Conn, $Querry);
    }

    $result = mysqli_query($Conn, "SELECT * FROM infdata");
    $num = mysqli_num_rows($result);
    if($num > 0){
        echo "<table border='1' cellpadding = '5'>
                <tr>
                  <td>Username</td>
                  <td>Fullname</td>
                  <td>Password</td>
                  <td>Email</td>
                  <td>Phonenumber</td>
                </tr>";
        while ( $row= mysqli_fetch_array($result)) {
    # code...
            echo "<tr>";
            echo "<td>".$row['UserName']."</td>";
            echo "<td>".$row['FullName']."</td>";
            echo "<td>".$row['Password']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['PhoneNum']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    mysqli_close($Conn);