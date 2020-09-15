<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Let do it</title>
    <style>
        span{
            font-size: 20px;
            padding: 10px;
        }
        h3{
            color: red;
        }
    </style>
</head>
<body>
    <form action="Add.php" method="get" name="form">
        <span>1</span>
        <span>Item 1</span>
        <span>3000$</span>
        <a href="http://localhost:63342/untitled1/product/Add.php?action=add&id=1&name=Item1&price=3000$">Add</a>
        <a href="http://localhost:63342/untitled1/product/Add.php?action=remove&id=1&name=Item1&price=3000$">Remove</a>
        <br>
        <span>2</span>
        <span>Item 2</span>
        <span>5000$</span>
        <a href="http://localhost:63342/untitled1/product/Add.php?action=add&id=2&name=Item2&price=5000$">Add</a>
        <a href="http://localhost:63342/untitled1/product/Add.php?action=remove&id=2&name=Item2&price=5000$">Remove</a>
        <br>
        <span>3</span>
        <span>Item 3</span>
        <span>7000$</span>
        <a href="http://localhost:63342/untitled1/product/Add.php?action=add&id=3&name=Item3&price=7000$">Add</a>
        <a href="http://localhost:63342/untitled1/product/Add.php?action=remove&id=3&name=Item3&price=7000$">Remove</a>
        <br>
    </form>
</body>
<?php

if ($_SESSION['cart']){
    echo '<h3>Add Success</h3>';
    foreach ($_SESSION['cart'] as $Keys => $Values){
        $Name = $Values['name'];
        $SoLuong = $Values['SL'];
        $GiaCa = $Values['price'];
        echo 'Name: ' . $Name. " - Quantity: " . $SoLuong . " - Price: " . $GiaCa;
        echo '<br>';
    }
}
?>
