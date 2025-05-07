<?php

require "connection.php";


require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;


$aoun = $_POST["aoun"];
$aop = $_POST["aop"];

if (empty($aoun)) {
    echo ("Please Enter Your User Name");
} else if (empty($aop)) {
    echo ("Please Enter Your Password");
} else {

    $rs = Database::search("SELECT * FROM `academic_officer` WHERE `user_name`='" . $aoun . "' AND `password`='" . $aop . "'");
    $num = $rs->num_rows;

    $data = $rs->fetch_assoc();

    $email = $data["email"];

    if ($num == 1) {

        $code = uniqid();

        Database::iud("UPDATE `academic_officer` SET `verification_code`='" . $code . "' WHERE `user_name`='" . $aoun . "'");


        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kshprimekshithija11@gmail.com';
        $mail->Password = 'brbsysaokucpsple';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('kshprimekshithija11@gmail.com', 'Academic Officer Login Verify');
        $mail->addReplyTo('kshprimekshithija11@gmail.com', 'Academic Officer Login Verify');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'SL Academi Academic Officer Login Verification Code';
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
