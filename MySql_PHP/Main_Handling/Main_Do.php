<?php
include "Module/SQL_Querry.php";
session_start();

if($_POST["submit"] == "Login-Form"){
    header('location:Display/Log-In.php');
}

if($_POST["submit"] == "Login-Form"){
    header('location:Display/Register.php');
}

if ($_POST["submit"] == "register"){
    if (isset($_POST["UserName"]) && isset($_POST["FullName"]) && isset($_POST["Password"]) && isset($_POST["Re-Pass"]) && isset($_POST["Email"]) && isset($_POST["PhoneNum"])){
        $UserName = $_POST["UserName"];
        $FullName = $_POST["FullName"];
        $Password = $_POST["Password"];
        $Re_pass  = $_POST["Re-Pass"];
        $Email = $_POST["Email"];
        $PhoneNum = $_POST["PhoneNum"];

        $Result = GetByUser($UserName);
        if($Result == null){
            if(Insert($UserName, $FullName, $Password, $Email, $PhoneNum)){
                header('location:Display/Log-In.php');
            }
            else{
                $_SESSION['Noti'] = "Something went wrong!!!";
                header('location:Display/Register.php');
            }
        }else{
            $_SESSION['Noti'] = "Username is already exists";
            header('location:Display/Register.php');
        }
    }
}

if ($_POST["submit"] == "Login") {
    if (isset($_POST["UserName"]) && isset($_POST["Password"]) && $_POST["UserName"] != '' && $_POST["Password"] != '') {
        $UserName = $_POST["UserName"];
        $Password = $_POST["Password"];
        $Result = GetByUser($UserName);
        if ($Result == null){
            $_SESSION['Noti'] = 'User name not exists, please try aganin';
            header('location:Display/Log-In.php');
        }else{
            if ($Password == $Result['Password']){
                header('location:Display/After_Login.php');
                $_SESSION['Login'] = 'LoginDone';
            }else{
                $_SESSION['Noti'] = "Login Fail, wrong password or username";
                header('location:Display/Log-In.php');
            }
        }
    }
}

if ($_POST["submit"] == "CheckMail"){
    if (isset($_POST["Email"]) && $_POST["Email"] != ''){
        $Email = $_POST["Email"];
        $_SESSION['Email'] = $Email;
        if (GetByEmail($Email) == null){
            $_SESSION['Noti'] = "Account of email not exists";
            header('location:Display/For-got-u-p.php');
        }else{
            $Rand = rand(100000, 999999);
            $_SESSION['Rand'] = $Rand;
            $to = "$Email";
            $subject = "Verify Email";
            $message = "$Rand";
            $header = "From: $Email";
            if (mail($to, $subject, $message, $header) == true){
                $_SESSION['Noti'] = "Use 6 number in mail to verify";
                header('location:Display/Check_Number.php');
            }else{
                $_SESSION['Noti'] = "Send mail fail, please try again";
                header('location:Display/For-got-u-p.php');
            }
        }
    }
}

if ($_POST["submit"] == "CheckNum"){
    if (isset($_POST["Number"]) && $_POST["Number"] != ''){
        $Number = $_POST["Number"];
        if ($Number == $_SESSION['Rand']){
            $_SESSION['Noti'] = "Change your password";
            header('location:Display/reset-password.php');
        }else{
            $_SESSION['Noti'] = "Number not correct, please check again";
            header('location:Display/Check_Number.php');
        }
    }
}

if ($_POST["submit"] == "ResetPass"){
    if (isset($_POST["Password"]) && $_POST["Password"] != ''){
        $Password = $_POST["Password"];
        $Re_pass = $_POST["Re-Pass"];

        if ($Password == $Re_pass){
            UpdatePass($_SESSION['Email'], $Password);
            $_SESSION['Noti'] = "Change password done, please log-in with new password";
            header('location:Display/Log-In.php');
        }else{
            $_SESSION['Noti'] = "Password and re-pass not same";
            header('location:Display/reset-password.php');
        }
    }
}

