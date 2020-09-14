<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Let do it</title>
    <link rel="stylesheet" href="Start.css">
</head>
<body>
    <?php
        $Array = array("Nguyen", "Phat", "Thanh", "Tai");
        if(!empty($Array)){
            for ($i = 0; $i < count($Array); $i++){
                echo $Array[$i] . " ";
            }
        }

        echo '<br/>';

        //for 2: tương ứng tên mảng AS vị trí => Giá trị của vị trí đó
        if (!empty($Array)){
            foreach ($Array as $Keys => $Values){
                echo $Keys . ' ';
                echo $Values . ' ';
            }
        }
    ?>
</body>
