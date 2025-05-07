<?php

session_start();

require "connection.php";

$aoun = $_POST["aoun"];
$aop = $_POST["aop"];


$aors = Database::search("SELECT * FROM `academic_officer` WHERE  `user_name`='" . $aoun . "' AND `password`='" . $aop . "' ");
$aodata = $aors->fetch_assoc();

if ($aodata["ver_status_id"] == 1) {



    if (isset($_POST["aovc"])) {


        $aoun = $_POST["aoun"];
        $aop = $_POST["aop"];
        $aovc = $_POST["aovc"];

        $rs = Database::search("SELECT * FROM `academic_officer` WHERE  `user_name`='" . $aoun . "' AND `password`='" . $aop . "' ");
        $num = $rs->num_rows;

        if ($num == 1) {

            $rs2 = Database::search("SELECT * FROM `academic_officer` WHERE `verification_code`='" . $aovc . "' ");
            $num2 = $rs2->num_rows;


            if ($num2 == 1) {


                $data = $rs->fetch_assoc();

                $_SESSION["academic_officer"] = $data;
                $aoemail = $data["email"];
                echo ("success");

                Database::iud("UPDATE `academic_officer` SET `verification_code`= '',`act_status_id`='2' WHERE `email`='" . $aoemail . "'");
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


    $aoun = $_POST["aoun"];
    $aop = $_POST["aop"];


    $rs = Database::search("SELECT * FROM `academic_officer` WHERE  `user_name`='" . $aoun . "' AND `password`='" . $aop . "' ");
    $num = $rs->num_rows;

    if ($num == 1) {


        $data = $rs->fetch_assoc();

        $_SESSION["academic_officer"] = $data;
        $aoemail = $data["email"];
        echo ("success");
    } else {

        echo ("Invalid User Name Or Password.");
    }
}
