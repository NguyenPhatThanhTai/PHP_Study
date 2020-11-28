<?php session_start();?>
<?php $_SESSION['Noti'] = ""; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="Style/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="Main_Handling/Main_Do.php" name="LoginForm" method="post">
                <span class="login100-form-title p-b-34">
                        Welcome!!!
                </span>
                <div class="container-login100-form-btn">
                    <button onclick="window.location.href='Main_Handling/Display/Log-In.php'" type="button" class="btn btn-success buttonGo">Login</button>
                    <button onclick="window.location.href='Main_Handling/Display/Register.php'" type="button" class="btn btn-primary buttonGo">Register</button>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('Picture/arindam-saha-PwzISwC2kLs-unsplash.jpg');"></div>
        </div>
    </div>
</div>

</body>
</html>
