<?php

session_start();

require "connection.php";



$tun = $_POST["tun"];
$tp = $_POST["tp"];



$trs = Database::search("SELECT * FROM `teacher` WHERE  `user_name`='" . $tun . "' AND `password`='" . $tp . "' ");
$tdata = $trs->fetch_assoc();

if ($tdata["ver_status_id"] == 1) {


    if (isset($_POST["tvc"])) {


        $tun = $_POST["tun"];
        $tp = $_POST["tp"];
        $tvc = $_POST["tvc"];

        $rs = Database::search("SELECT * FROM `teacher` WHERE  `user_name`='" . $tun . "' AND `password`='" . $tp . "' ");
        $num = $rs->num_rows;

        if ($num == 1) {

            $rs2 = Database::search("SELECT * FROM `teacher` WHERE `verification_code`='" . $tvc . "' ");
            $num2 = $rs2->num_rows;


            if ($num2 == 1) {


                $data = $rs->fetch_assoc();

                $_SESSION["teacher"] = $data;
                $temail = $data["email"];
                echo ("success");

                Database::iud("UPDATE `teacher` SET `verification_code`= '',`act_status_id`='2' WHERE `email`='" . $temail . "'");
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

    $tun = $_POST["tun"];
    $tp = $_POST["tp"];


    $rs = Database::search("SELECT * FROM `teacher` WHERE  `user_name`='" . $tun . "' AND `password`='" . $tp . "' ");
    $num = $rs->num_rows;

    if ($num == 1) {

        $data = $rs->fetch_assoc();

        $_SESSION["teacher"] = $data;
        $temail = $data["email"];
        echo ("success");

        Database::iud("UPDATE `teacher` SET `verification_code`= '',`act_status_id`='2' WHERE `email`='" . $temail . "'");
    } else {

        echo ("Invalid User Name Or Password.");
    }
}
