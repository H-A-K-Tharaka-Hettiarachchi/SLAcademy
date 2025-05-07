<?php

require "connection.php";


require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;


$sun = $_POST["sun"];
$sp = $_POST["sp"];

if (empty($sun)) {
    echo ("Please Enter Your User Name");
} else if (empty($sp)) {
    echo ("Please Enter Your Password");
} else {

    $rs = Database::search("SELECT * FROM `student` WHERE `user_name`='" . $sun . "' AND `password`='" . $sp . "'");
    $num = $rs->num_rows;

    $data = $rs->fetch_assoc();

    $email = $data["email"];

    if ($num == 1) {

        $code = uniqid();

        Database::iud("UPDATE `student` SET `verification_code`='" . $code . "' WHERE `user_name`='" . $sun . "'");


        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kshprimekshithija11@gmail.com';
        $mail->Password = 'brbsysaokucpsple';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('kshprimekshithija11@gmail.com', 'Student Login Verify');
        $mail->addReplyTo('kshprimekshithija11@gmail.com', 'Student Login Verify');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'SL Academi Student Login Verification Code';
        $bodyContent = ' <div><h1>SL Academi</h1><h3>Your Verification Code Is <h2>' . $code . '</h2></h3></div>  ';

        $mail->Body    = $bodyContent;


        if (!$mail->send()) {
            echo ("Verification Code Sending Failed");
        } else {
            echo ("success");
        }
        
    } else {
        echo ("Invalid  User Name Or Password.");
    }
}
