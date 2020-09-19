    <?php
    ini_set('SMTP', "server.com");
    ini_set('smtp_port', "567");
    ini_set('sendmail_from', "email@domain.com");
    $to      = "abc@example.com";
    $subject = "Tiêu đề email";
    $message = "Nội dung email";
    $header  =  "From:myemail@exmaple.com \r\n";
    $header .=  "Cc:other@exmaple.com \r\n";

    $success = mail ($to,$subject,$message,$header);

    if( $success == true )
    {
        echo "Đã gửi mail thành công...";
    }
    else
    {
        echo "Không gửi đi được...";
    }


    
