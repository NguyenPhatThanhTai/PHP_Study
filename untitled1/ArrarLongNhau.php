<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Let do it</title>
    <link rel="stylesheet" href="Start.css">
</head>
<body>
<form action="ArrarLongNhau.php" method="get">
    <input placeholder="Thay Doi So Luong" name="Change" value="<?php echo $_GET["Change"] ?>">
    <input type="submit" value="Thay Doi">
    <br>
    <br>
    <?php
    $Number_of = $_GET["Change"];
    if ($Number_of == 0){
        $Number_of = 1;
    }
    for ($i = 1; $i <= $Number_of; $i ++){
        echo '  <input type="text" name="Name'.$i.'" placeholder="Name here">
                    <input type="text" name="Age'.$i.'" placeholder="Age here">
                    <input type="text" name="Sex'.$i.'" placeholder="Sex here">
                    <input type="text" name="Graded'.$i.'" placeholder="Graded here">
                    <input type="text" name="Score_1'.$i.'" placeholder="Score_1 here">
                    <input type="text" name="Score_2'.$i.'" placeholder="Score_2 here">
                    <input type="text" name="Score_3'.$i.'" placeholder="Score_3 here">
                    <br>
                  ';
    }
    ?>
    <br>
    <input type="submit" value="Push">
</form>
    <?php
    for ($j = 1; $j <= $Number_of; $j ++){
        $Name_Form = $_GET["Name".$j];
        $Age_Form = $_GET["Age".$j];
        $Sex_Form = $_GET["Sex".$j];
        $Graded_Form = $_GET["Graded".$j];
        $Score_1_Form = $_GET["Score_1".$j];
        $Score_2_Form = $_GET["Score_2".$j];
        $Score_3_Form = $_GET["Score_3".$j];
        $Student = array("Name" => $Name_Form,"Age" => $Age_Form,"Sex" => $Sex_Form,"Graded" => $Graded_Form,"Score_1" => $Score_1_Form,"Score_2" => $Score_2_Form,"Score_3" => $Score_3_Form);
        $List_Student = array("Student".$j => $Student);
        echo $Name = "Name: " . $Name_Form . " ";
        echo $Age = "Age: " . $Age_Form . " ";
        echo $Sex ="Sex: " . $Sex_Form . " ";
        echo $Graded = "Graded: " . $Graded_Form . " ";
        echo $Score_1 = "Score_1: " . $Score_1_Form . " ";
        echo $Score_2 = "Score_2: " .  $Score_2_Form . " ";
        echo $Score_3 = "Score_3: " . $Score_3_Form . " ";
        echo '<pre>';
        print_r($List_Student);
        echo '</pre>';
    }
//        $Student_Array = array(
//                        "SV001" => array(
//                            "Name" => "ThanhTai_1", "Age" => "20", "Sex" => "Male", "Grades" => array(
//                                                                                                        4,5,6)),
//                        "SV002" => array(
//                            "Name" => "ThanhTai_2", "Age" => "21", "Sex" => "Male", "Grades" => array(
//                                                                                                        5,6,7)),
//                        "SV003" => array(
//                            "Name" => "ThanhTai_3", "Age" => "22", "Sex" => "Male", "Grades" => array(
//                                                                                                        6,7,8))
//        );
//            foreach ($Student_Array as $Keys => $Values){
//                echo '<pre>';
//                print_r($Values);
//                echo '</pre>';
//            }
    ?>
</body>

