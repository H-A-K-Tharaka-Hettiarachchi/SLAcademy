<?php

require "connection.php";


require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$stun = $_POST["stun"];
$stpw = $_POST["stpw"];
$email = $_POST["stemail"];

if (empty($stun)) {
    echo ("Please Enter User Name");
} else if (empty($stpw)) {
    echo ("Please Enter Password");
} else {





    $rs = Database::search("SELECT * FROM `student` WHERE `email`='" . $email . "'");
    $num = $rs->num_rows;

    if ($num == 1) {

        Database::iud("UPDATE `student` SET `user_name`='" . $stun . "' , `password`= '" . $stpw . "' , `inv_status_id`='2' WHERE `email`='" . $email . "' ");



        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kshprimekshithija11@gmail.com';
        $mail->Password = 'brbsysaokucpsple';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('kshprimekshithija11@gmail.com', 'Send Student Invitation');
        $mail->addReplyTo('kshprimekshithija11@gmail.com', 'Send Student Invitation');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'SL Academi Student Invitation';
        $bodyContent = ' <div><h1>SL Academi</h1><h3>Your USER NAME  Is <h2>' . $stun . '</h2></h3><h3>Your PASSWORD  Is <h2>' . $stpw . '</h2></h3></div>  ';

        $mail->Body    = $bodyContent;


        if (!$mail->send()) {
            echo ("Invitation Sending Faild");
        } else {
            echo ("success");
        }
    } else {
        echo ("Invalid  Email");
    }
}
