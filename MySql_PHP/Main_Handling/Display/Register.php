<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign-up</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../Style/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../../Style/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../Style/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../Style/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../Style/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../Style/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../Style/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../Style/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../Style/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../Style/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../Style/css/util.css">
    <link rel="stylesheet" type="text/css" href="../../Style/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="../Main_Do.php" name="LoginForm" method="post">
                <span class="login100-form-title p-b-34">
                    Account Sign_Up
                </span>
                <div class="wrap-input100  validate-input m-b-20" data-validate="Type user name">
                    <input id="first-name" class="input100" type="text" name="UserName" placeholder="User name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100  validate-input m-b-20" data-validate="Type FullName">
                    <input class="input100" type="text" name="FullName" placeholder="FullName">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100  validate-input m-b-20" data-validate="Password length must be greater than 10 characters">
                    <input class="input100" type="password" name="Password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100  validate-input m-b-20" data-validate="Password length must be greater than 10 characters">
                    <input class="input100" type="password" name="Re-Pass" placeholder="Enter password again">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100  validate-input m-b-20" data-validate="Wrong Email">
                    <input class="input100" type="text" name="Email" placeholder="Email">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100  validate-input m-b-20" data-validate="Wrong Phone Number">
                    <input class="input100" type="text" name="PhoneNum" placeholder="Phone number">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit" value="register" name="submit">
                        Sign Up
                    </button>
                </div>

                <h6 style="color: indianred"><?php echo $_SESSION['Noti']?></h6>
                <?php $_SESSION['Noti'] = ""; ?>

                <div class="w-full text-center">
                    <a href="#" class="txt3">
                        Sign In
                    </a>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('../../Picture/janelle-soto-Hq7d3HPrWL8-unsplash.jpg');"></div>
        </div>
    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="../../Style/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../../Style/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../../Style/vendor/bootstrap/js/popper.js"></script>
<script src="../../Style/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../../Style/vendor/select2/select2.min.js"></script>
<script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src="../../Style/vendor/daterangepicker/moment.min.js"></script>
<script src="../../Style/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../../Style/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="../../Style/js/main.js"></script>

</body>
</html>
