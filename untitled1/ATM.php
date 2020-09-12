<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Let do it</title>
    <link rel="stylesheet" href="Start.css">
</head>
<body>
    <?php
        $SoTien = 0;
        $SoToFive_00 = 0;
        $SoToTwo_00 = 0;
        $SoToOne_00 = 0;
        $SoToFive_0 = 0;
        $SoToTwo_0 = 0;
        $SoToOne_0 = 0;
        $SoToFive = 0;
        $SoToTwo = 0;
        $SoToOne = 0;
        $Five_00 = 500000;
        $Two_00 = 200000;
        $One_00 = 100000;
        $Five_0 = 50000;
        $Two_0 = 20000;
        $One_0 = 10000;
        $Five = 5000;
        $Two = 2000;
        $One = 1000;

        if(isset($_POST["SoTien"])) {
            $SoTien = $_POST["SoTien"];

            while ($SoTien >= $Five_00) {
                $SoToFive_00++;
                $SoTien = $SoTien - 500000;
            }

            while ($SoTien >= $Two_00) {
                $SoToTwo_00++;
                $SoTien = $SoTien - 200000;
            }

            while ($SoTien >= $One_00) {
                $SoToOne_00++;
                $SoTien = $SoTien - 100000;
            }

            while ($SoTien >= $Five_0) {
                $SoToFive_0++;
                $SoTien = $SoTien - 50000;
            }

            while ($SoTien >= $Two_0) {
                $SoToTwo_0++;
                $SoTien = $SoTien - 20000;
            }

            while ($SoTien >= $One_0) {
                $SoToOne_0++;
                $SoTien = $SoTien - 10000;
            }

            while ($SoTien >= $Five) {
                $SoToFive++;
                $SoTien = $SoTien - 5000;
            }

            while ($SoTien >= $Two) {
                $SoToTwo++;
                $SoTien = $SoTien - 2000;
            }

            while ($SoTien >= $One) {
                $SoToOne++;
                $SoTien = $SoTien - 1000;
            }
        }
    ?>
    <div class="ATMbox">
        <form action="ATM.php" method="post">
            <table>
                <input type="text" placeholder="Nhap So Tien Can Rut" name="SoTien" value="<?php echo number_format($_POST["SoTien"])?>">
                <input type="submit" value="Rut Tien">
                <br>
                <tr>
                    <th>Mệnh giá</th>
                    <th>Số tờ</th>
                    <th>Thành tiền</th>
                </tr>
                <?php
                    if($SoToFive_00 > 0){
                        echo '<tr>
                                <td>'.number_format($Five_00).'</td>
                                <td>'.number_format($SoToFive_00).'</td>
                                <td>'.number_format(($SoToFive_00 * 500000)).'</td>
                              </tr>';
                    }
                ?>
                <?php
                    if($SoToTwo_00 > 0){
                        echo '<tr>
                                    <td>'.number_format($Two_00).'</td>
                                    <td>'.number_format($SoToTwo_00).'</td>
                                    <td>'.number_format(($SoToTwo_00 * 200000)).'</td>
                                  </tr>';
                    }
                ?>
                <?php
                    if($SoToOne_00 > 0){
                        echo '<tr>
                                    <td>'.number_format($One_00).'</td>
                                    <td>'.number_format($SoToOne_00).'</td>
                                    <td>'.number_format(($SoToOne_00 * 100000)).'</td>
                                  </tr>';
                    }
                ?>
                <?php
                    if($SoToFive_0 > 0){
                        echo '<tr>
                                    <td>'.number_format($Five_0).'</td>
                                    <td>'.number_format($SoToFive_0).'</td>
                                    <td>'.number_format(($SoToFive_0 * 50000)).'</td>
                                  </tr>';
                    }
                ?>
                <?php
                    if($SoToTwo_0 > 0){
                        echo '<tr>
                                    <td>'.number_format($Two_0).'</td>
                                    <td>'.number_format($SoToTwo_0).'</td>
                                    <td>'.number_format(($SoToTwo_0 * 20000)).'</td>
                                  </tr>';
                    }
                ?>
                <?php
                    if($SoToOne_0 > 0){
                        echo '<tr>
                                    <td>'.number_format($One_0).'</td>
                                    <td>'.number_format($SoToOne_0).'</td>
                                    <td>'.number_format(($SoToOne_0 * 10000)).'</td>
                                  </tr>';
                    }
                ?>
                <?php
                    if($SoToFive > 0){
                        echo '<tr>
                                        <td>'.number_format($Five).'</td>
                                        <td>'.number_format($SoToFive).'</td>
                                        <td>'.number_format(($SoToFive * 5000)).'</td>
                                      </tr>';
                    }
                ?>
                <?php
                    if($SoToTwo > 0){
                        echo '<tr>
                                            <td>'.number_format($Two).'</td>
                                            <td>'.number_format($SoToTwo).'</td>
                                            <td>'.number_format(($SoToTwo * 2000)).'</td>
                                          </tr>';
                    }
                ?>
                <?php
                    if($SoToOne > 0){
                        echo '<tr>
                                                <td>'.number_format($One).'</td>
                                                <td>'.number_format($SoToOne).'</td>
                                                <td>'.number_format(($SoToOne * 1000)).'</td>
                                              </tr>';
                    }
                ?>
            </table>
        </form>
    </div>
</body>
