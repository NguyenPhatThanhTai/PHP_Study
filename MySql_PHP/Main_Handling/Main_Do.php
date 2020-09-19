<?php
include "Module/SQL_Querry.php";
session_start();

if ($_POST["submit"] == "register"){
    if (isset($_POST["UserName"]) && isset($_POST["FullName"]) && isset($_POST["Password"]) && isset($_POST["Re-Pass"]) && isset($_POST["Email"]) && isset($_POST["PhoneNum"])){
        $UserName = $_POST["UserName"];
        $FullName = $_POST["FullName"];
        $Password = $_POST["Password"];
        $Re_pass  = $_POST["Re-Pass"];
        $Email = $_POST["Email"];
        $PhoneNum = $_POST["PhoneNum"];

        if($Password == $Re_pass){
            $Result = GetByUser($UserName);
            if($Result == null){
                Insert($UserName, $FullName, $Password, $Email, $PhoneNum);
                header('location:Display/Log-In.php');
            }else{
                $_SESSION['Noti'] = "Username is already exists";
                header('location:Display/Register.php');
            }
        }else{
            $_SESSION['Noti'] = "Password not same";
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
            }else{
                $_SESSION['Noti'] = "Login Fail, wrong password or username";
                header('location:Display/Log-In.php');
            }
        }
    }elseif ($_POST["UserName"] == '' || '' && $_POST["Password"] == ''){
        header('location:Display/Log-In.php');
        echo 'Null type';
    }
}