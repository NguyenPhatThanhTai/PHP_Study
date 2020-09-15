<?php
    session_start();
    $id = $_GET["id"];
    $name = $_GET["name"];
    $price = $_GET["price"];

//    if (isset($_SESSION['cart'])){
//        echo 'already have';
//    }else{
//        echo 'Not';
//    }

if ($_GET['action'] == "add"){
    if (isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['SL']++;
    }else{
        $_SESSION['cart'][$id] = array(
            'name' => $name,
            'SL' => 1,
            'price' => $price
        );
    }
}
if ($_GET['action'] == "remove"){
    if (isset($_SESSION['cart'][$id]) && $_SESSION['cart'][$id]['SL'] > 0) {
        $_SESSION['cart'][$id]['SL']--;
    }
}
    header('location:index.php');
