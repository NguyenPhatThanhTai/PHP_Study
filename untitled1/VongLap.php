<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Let do it</title>
    <link rel="stylesheet" href="Start.css">
</head>
<body>
    <div class="content">
        <?php
        $i = 1;
        $show = 0;
            do{
                echo ('<img src="Picture/Pic-'.$i.'.jpg">');
                if(isset($_GET["show"])){
                    $show = $_GET["show"];
                    $i++;
                }
            }while ($i <= 5 && $show == 1);
        ?>
        <a href="http://localhost:63342/untitled1/VongLap.php?show=1">show all</a>
        <a href="http://localhost:63342/untitled1/VongLap.php?show=0">show less</a>
    </div>
</body>