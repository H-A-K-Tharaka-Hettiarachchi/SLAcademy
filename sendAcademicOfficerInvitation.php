<?php

require "connection.php";


require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$aoun = $_POST["aoun"];
$aop = $_POST["aop"];
$email = $_POST["aoemail"];

if (empty($aoun)) {
    echo ("Please Enter User Name");
} else if (empty($aop)) {
    echo ("Please Enter Password");
} else {





    $rs = Database::search("SELECT * FROM `academic_officer` WHERE `email`='" . $email . "'");
    $num = $rs->num_rows;

    if ($num == 1) {

        Database::iud("UPDATE `academic_officer` SET `user_name`='" . $aoun . "' , `password`= '" . $aop . "' , `inv_status_id`='2' WHERE `email`='" . $email . "' ");



        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kshprimekshithija11@gmail.com';
        $mail->Password = 'brbsysaokucpsple';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('kshprimekshithija11@gmail.com', 'Send Academic Officer Invitation');
        $mail->addReplyTo('kshprimekshithija11@gmail.com', 'Send Academic Officer Invitation');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'SL Academi Academic Officer Invitation';
        $bodyContent = ' <div><h1>SL Academi</h1><h3>Your USER NAME  Is <h2>' . $aoun . '</h2></h3><h3>Your PASSWORD  Is <h2>' . $aop . '</h2></h3></div>  ';

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
