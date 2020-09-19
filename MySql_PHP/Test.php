<?php
    $to = "nguyenphatthanhtai@gmail.com";
    $subject = "Test Email";
    $message = "This is test mail";
    $header = "From: nguyenphatthanhtai@gmail.com";
    if (mail($to, $subject, $message, $header) == true) {
        echo "success";
    } else {
        echo "Fail";
    }
