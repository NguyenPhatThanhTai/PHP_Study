<?php session_start();
    if($_SESSION['Login'] == ''){
        header('location:Log-In.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../Style/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
    <img class="S-picture" src="../../Picture/sayhi.gif">
</body>
</html>
