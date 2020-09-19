<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../Style/Styles.css">
</head>
<body>

<header>Welcome to my page</header>
<p>Login to your account</p>
<form action="../Main_Do.php" name="LoginForm" method="post">
    <div class="content">
        <input type="text" name = "Number" placeholder="Number here ( 6 number )">
        <input type="submit" value="CheckNum" name="submit">
    </div>
</form>
<h3 style="color: black"><?php echo $_SESSION['Noti']?></h3>
<?php $_SESSION['Noti'] = ""; ?>
</body>
</html>
