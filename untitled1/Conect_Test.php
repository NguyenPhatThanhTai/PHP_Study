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
<?php
    require "Connection.php";
?>
</body>

