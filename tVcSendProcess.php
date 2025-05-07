<?php

require "connection.php";


require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;


$tun = $_POST["tun"];
$tp = $_POST["tp"];

if (empty($tun)) {
    echo ("Please Enter Your User Name");
} else if (empty($tp)) {
    echo ("Please Enter Your Password");
} else {

    $rs = Database::search("SELECT * FROM `teacher` WHERE `user_name`='" . $tun . "' AND `password`='" . $tp . "'");
    $num = $rs->num_rows;

    $data = $rs->fetch_assoc();

    $email = $data["email"];

    if ($num == 1) {

        $code = uniqid();

        Database::iud("UPDATE `teacher` SET `verification_code`='" . $code . "' WHERE `user_name`='" . $tun . "'");


        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kshprimekshithija11@gmail.com';
        $mail->Password = 'brbsysaokucpsple';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('kshprimekshithija11@gmail.com', 'Teacher Login Verify');
        $mail->addReplyTo('kshprimekshithija11@gmail.com', 'Teacher Login Verify');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'SL Academi Teacher Login Verification Code';
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
