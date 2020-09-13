<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Let do it</title>
    <link rel="stylesheet" href="Start.css">
</head>
<body>
    <?php
        $Total_Data = 0;
        function GetData (&$Data_1, &$Data_2){ //Dấu & ở đây là tham chiếu ( là nó sẽ thay đổi luôn giá trị truyền vào của $Input1 và $Input2 )
            $Data_1 = $Data_1 * 2;
            $Data_2 = $Data_2 * 2;
            return $Data_1 + $Data_2;
        }
    ?>
    <?php
    $Input1 = 5;
    $Input_2 = 9;
        $Total_Data = GetData($Input1,$Input_2);
        echo '<h3>Total_Data</h3>'.$Total_Data;
        echo  '<h3>Input_1</h3>'.$Input1;
        echo  '<h3>Input_1</h3>'.$Input_2;
    ?>
</body>
