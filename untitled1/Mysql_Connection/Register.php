<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Style/Styles.css">
</head>
<body>

<header>Welcome to my page</header>
<p>Register new account</p>
<form action="Main_Do.php" name="LoginForm" method="post">
    <div class="content">
        <input type="text" name = "UserName" placeholder="User Name here">
        <input type="text" name = "FullName" placeholder="Full Name here">
        <input type="password" name = "Password" placeholder="Password here">
        <input type="password" name = "Re-Pass" placeholder="Re-Password here">
        <input type="text" name = "Email" placeholder="Email here">
        <input type="text" name = "PhoneNum" placeholder="Phone Number here">
        <input type="submit" value="register" name="submit">
    </div>
</form>
</body>
</html>
