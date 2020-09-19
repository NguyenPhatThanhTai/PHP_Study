<?php
    $Host = 'localhost:3366';
    $Username = 'root';
    $Password = '';
    $Database_Name = 'firstdata';
    $Conn = mysqli_connect($Host, $Username, $Password, $Database_Name);

    function GetByUser($User){
        global $Conn;
        $Querry = "SELECT UserName, Password from infdata WHERE UserName = '$User'";
        $Num = mysqli_query($Conn, $Querry);
        if(mysqli_num_rows($Num) == 0){
            return null;
        }else{
            return mysqli_fetch_array($Num);
        }
    }

    function Insert($User, $FullN, $Pass, $Email, $PhoneN){
        global $Conn;
        $Querry = "INSERT INTO infdata(UserName, FullName, Password, Email, PhoneNum) VALUES ('".$User."', '".$FullN."',
                                '".$Pass."', '".$Email."', '".$PhoneN."')";
        mysqli_query($Conn, $Querry);
        mysqli_close($Conn);
    }