<?php

session_start();

require "connection.php";


$sun = $_POST["sun"];
$sp = $_POST["sp"];



$srs = Database::search("SELECT * FROM `student` WHERE  `user_name`='" . $sun . "' AND `password`='" . $sp . "' ");
$sdata = $srs->fetch_assoc();

if ($sdata["ver_status_id"] == 1) {


    if (isset($_POST["svc"])) {


        $sun = $_POST["sun"];
        $sp = $_POST["sp"];
        $svc = $_POST["svc"];

        $rs = Database::search("SELECT * FROM `student` WHERE  `user_name`='" . $sun . "' AND `password`='" . $sp . "' ");
        $num = $rs->num_rows;

        if ($num == 1) {

            $rs2 = Database::search("SELECT * FROM `student` WHERE `verification_code`='" . $svc . "' ");
            $num2 = $rs2->num_rows;


            if ($num2 == 1) {




                $data = $rs->fetch_assoc();

                $_SESSION["student"] = $data;
                $semail = $data["email"];
                echo ("success");

                Database::iud("UPDATE `student` SET `verification_code`= '',`act_status_id`='2' WHERE `email`='" . $semail . "'");
            } else {
                echo ("Invalid Verification Code.");
            }
        } else {

            echo ("Invalid User Name Or Password.");
        }
    } else {

        echo ("Please Enter Your Verification Code");
    }
} else {


    $sun = $_POST["sun"];
    $sp = $_POST["sp"];


    $rs = Database::search("SELECT * FROM `student` WHERE  `user_name`='" . $sun . "' AND `password`='" . $sp . "' ");
    $num = $rs->num_rows;

    if ($num == 1) {

        $data = $rs->fetch_assoc();

        $_SESSION["student"] = $data;
        $semail = $data["email"];
        echo ("success");
    } else {

        echo ("Invalid User Name Or Password.");
    }
}
