<?php
    $Host = 'localhost';
    $Username = 'root';
    $Password = '123456';
    $Database_Name = 'first_time';

    $Conn = mysqli_connect($Host, $Username, $Password, $Database_Name);

    if (!$Conn){
        echo "Connect Fail";
    }else{
        echo "Connect Success";
    }
