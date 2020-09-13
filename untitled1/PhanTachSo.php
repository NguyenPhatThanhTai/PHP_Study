<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Let do it</title>
    <link rel="stylesheet" href="Start.css">
</head>
<body>
<?php
    $Number = 0;
    $FinalTotal = 0;
    if(isset($_GET["Number"])){
        $Number = $_GET["Number"];
    }
        function GetTotal($Num){ // vd num = 123
            $Total = 0;
            $SoDu = 0;
            while ($Num > 0){
                $SoDu = $Num % 10; // %10 thì còn 12,3
                $Total += $SoDu; // cộng vô tổng là 3
                $Num = ($Num - $SoDu) / 10; // trừ ra là 12,0 chia cho 10 còn 12 lặp lại bước trên
            }
            return $Total;
    }
    $FinalTotal = GetTotal($Number);
?>
<form action="PhanTachSo.php" method="get">
    <input type="text" name="Number" placeholder="Nhap So O Day" value="<?php echo $Number ?>">
    <input type="submit" value="OK">
    <h3>Ket qua tong la: <?php echo $FinalTotal ?></h3>
</form>
</body>
