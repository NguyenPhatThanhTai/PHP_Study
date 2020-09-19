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
        <input type="text" name = "UserName" placeholder="User Name here">
        <input type="password" name = "Password" placeholder="Password here">
        <input type="submit" value="Login" name="submit">
        <a href="For-got-u-p.php">Forgot</a>
    </div>
</form>
<h3 style="color: black"><?php echo $_SESSION['Noti']?></h3>
<?php $_SESSION['Noti'] = ""; ?>
</body>
</html>
