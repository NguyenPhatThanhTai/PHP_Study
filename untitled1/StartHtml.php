<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Let do it</title>
    <link rel="stylesheet" href="Start.css">
</head>
<body>
<form method="post" action="Start.php" name="First_Form">
    <input type="text" name="First_Input">
    <input type="password" name="First_Password">
    <input type="submit" value="Submit">
</form>
<div class="content">
    <a href="StartHtml.php?page=1">1</a>
    <a href="StartHtml.php?page=2">2</a>
    <a href="StartHtml.php?page=3">3</a>
    <a href="StartHtml.php?page=4">4</a>
    <a href="StartHtml.php?page=5">5</a>
</div>
    <?php
        $page = (isset($_GET["page"]) == true) ? $_GET["page"] : 0;
    ?>
    <h3>Đây là page số: <?php echo $page ?></h3>
<?php
$Num1 = "";
$Caculator = "";
$Num2 = "";

// $_POST ở đây là khi mà người dùng sử dụng method Post ở form mới đúng
if(isset($_POST["N1"]) && isset($_POST["NCaculator"]) && isset($_POST["N3"])){
    $Num1 = $_POST["N1"];
    $Caculator = $_POST["NCaculator"];
    $Num2 = $_POST["N3"];
}
$Result = 0;
switch ($Caculator){
    case "+":
        $Result = $Num1 + $Num2;
        break;
    case "-":
        $Result = $Num1 - $Num2;
        break;
    case "*":
    case "x":
    case"X":
        $Result = $Num1 * $Num2;
    break;
    case "/":
    case":":
        $Result = $Num1 / $Num2;
        break;
    default:
        $Num1 = "";
        $Caculator = "";
        $Num2 = "";
        $Result = "Somthing went wrong";
}
?>
<form action="StartHtml.php" method="post">
    <div class="Caculator">
        <input type="text" name="N1" value="<?php echo $Num1 ?>">
        <input type="text" name = "NCaculator" value="<?php echo $Caculator ?>">
        <input type="text" name = "N3" value="<?php echo $Num2 ?>">
        <input type="submit" value="OK" name="submit"/>
        <h3>Kết quả của : <?php echo $Num1 . " " . $Caculator . " " . $Num2 . " = " . $Result ?>  </h3>
    </div>
</form>
</body>
</html>

