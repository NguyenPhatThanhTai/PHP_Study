<?php
include 'PHP/PHP_Do/Dao.php';
    class Intermediate{
        function Load_First()
        {
            $a = new MySql();
            $a ->dbConnect();
            $b = $a ->selectAll('product_inf');

            $product = array();

            $i = 0;
            while ($row = mysqli_fetch_array($b)) {
                $product[$i] = array(
                    'Id' => $row[0],
                    'Name' => $row[1],
                    'Producer' => $row[2],
                    'Money' => $row[3],
                    'Picture' => $row[4],
                );
                $i++;
            }
            return $product;
        }

        function Load_Detail(){
            $a = new MySql();
            $a ->dbConnect();
            $c = $a ->selectDetail($_GET['id']);

            $productDetail  = array();

            while ($row = mysqli_fetch_array($c)) {
                $productDetail = array(
                    'Laptop_Id' => $row[0],
                    'Laptop_OS' => $row[1],
                    'Laptop_CPU' => $row[2],
                    'Laptop_Ram' => $row[3],
                    'Laptop_VGA' => $row[4],
                    'Laptop_Hdd' => $row[5],
                    'Laptop_Ssd' => $row[6],
                    'Laptop_Display' => $row[7],
                    'Laptop_Lan' => $row[8],
                    'Laptop_WirelessLan' => $row[9],
                    'Laptop_ConnectionGate' => $row[10],
                    'Laptop_KeyBoard' => $row[11],
                    'Laptop_Pin' => $row[12],
                    'Laptop_Weight' => $row[13],
                    'Laptop_OpticalDrive' => $row[14],
                );
            }
            return $productDetail;
        }
    }
