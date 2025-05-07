<?php

require "connection.php";


require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;


if (isset($_GET["e"])) {

    $email = $_GET["e"];

    $rs = Database::search("SELECT * FROM `admin` WHERE `email`='" . $email . "'");
    $num = $rs->num_rows;

    if ($num == 1) {

        $code = uniqid();

        Database::iud("UPDATE `admin` SET `verification_code`='" . $code . "' WHERE `email`='" . $email . "'");


        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kshprimekshithija11@gmail.com';
        $mail->Password = 'brbsysaokucpsple';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('kshprimekshithija11@gmail.com', 'Admin Verify');
        $mail->addReplyTo('kshprimekshithija11@gmail.com', 'Admin Verify');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'SL Academi Admin Verification Code';
        $bodyContent = ' <div><h1>SL Academi</h1><h3>Your Verification Code Is <h2>'.$code.'</h2></h3></div>  ';

        $mail->Body    = $bodyContent;


        if (!$mail->send()) {
            echo ("Verification Code Sending Failed");
        } else {
            echo ("success");
        }
    } else {
        echo ("Invalid Admin Email");
    }
}
