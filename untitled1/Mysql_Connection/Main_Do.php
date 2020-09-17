<?php
    include 'Connection.php';
    $Host = 'localhost:3366';
    $Username = 'root';
    $Pass = '';
    $Database_Name = 'firstdata';
    $Conn = mysqli_connect($Host, $Username, $Pass, $Database_Name);

    if ($_POST["submit"] == "register"){
        if (isset($_POST["UserName"]) && isset($_POST["FullName"]) && isset($_POST["Password"]) && isset($_POST["Re-Pass"]) && isset($_POST["Email"]) && isset($_POST["PhoneNum"])){
            $UserName = $_POST["UserName"];
            $FullName = $_POST["FullName"];
            $Password = $_POST["Password"];
            $Email = $_POST["Email"];
            $PhoneNum = $_POST["PhoneNum"];
            $Querry = "INSERT INTO infdata(UserName, FullName, Password, Email, PhoneNum) VALUES ('".$UserName."', '".$FullName."',
                                '".$Password."', '".$Email."', '".$PhoneNum."')";
            $result = mysqli_query($Conn, $Querry);
            header('location:Log-In.php');
        }
    }

    if ($_POST["submit"] == "Login") {
        if (isset($_POST["UserName"]) && isset($_POST["Password"]) && $_POST["UserName"] != '' && $_POST["Password"] != '') {
            $UserName = $_POST["UserName"];
            $Password = $_POST["Password"];

            $Querry = "SELECT UserName, Password from infdata WHERE UserName = '$UserName'";
            $Num = mysqli_query($Conn, $Querry);
            if(mysqli_num_rows($Num) == 0){
                echo 'Khong ton tai nguoi dung nay';
            }

            $Row = mysqli_fetch_array($Num);
                if ($Password == $Row['Password']){
                    $_SESSION['Login'] = $UserName;
//                    echo 'xin chao'.$Row[' UserName '].'ban da dang nhap thanh cong';
                    header('location:After_Login.php');
                }else{
                    echo 'Dang nhap that bai';
                }
            }elseif ($_POST["UserName"] == '' || '' && $_POST["Password"] == ''){
                echo 'Null type';
        }
    }

        mysqli_close($Conn);
