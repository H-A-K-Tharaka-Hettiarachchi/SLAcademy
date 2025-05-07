<?php

require "connection.php";

$fn = $_POST["fn"];
$ln = $_POST["ln"];
$em = $_POST["em"];
$un = $_POST["un"];
$pw = $_POST["pw"];
$mo = $_POST["mo"];
$dob = $_POST["dob"];
$ge = $_POST["ge"];
$gr = $_POST["gr"];




if (empty($fn)) {
    echo ("Please Enter First Name");
} else if (empty($ln)) {
    echo ("Please Enter Last Name");
} else if (empty($em)) {
    echo ("Please Enter Email");
} else if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email");
} else if (empty($un)) {
    echo ("Please Enter User Name");
} else if (empty($pw)) {
    echo ("Please Enter Password");
} else if (empty($mo)) {
    echo ("Please Enter Mobile Number");
} else if (strlen($mo) != 10) {
    echo ("Mobile Number Must be 10 Numbers");
} else if (!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/", $mo)) {
    echo ("Invalid Mobile Number");
} else if (empty($dob)) {
    echo ("Please Select Date Of Birth");
} else if (empty($ge)) {
    echo ("Please Select Gender");
} else if (empty($gr)) {
    echo ("Please Select Grade");
} else {





    $rs = Database::search("SELECT *  FROM `student` WHERE `mobile`='" . $mo . "' AND `email`='" . $em . "'");
    $num = $rs->num_rows;


    if ($num == 1) {

        echo ("Mobile Number And Email Already Exists.");
    } else {


        Database::iud("INSERT INTO `student` (`fname`,`lname`,`email`,`user_name`,`password`,`mobile`,`dob`,`gender_id`,`grade_id`,`pay_status_id`,`blo_status_id`,`ver_status_id`,`inv_status_id`,`act_status_id`)
                                     VALUES  ('" . $fn . "','" . $ln . "','" . $em . "','" . $un . "','" . $pw . "','" . $mo . "','" . $dob . "','" . $ge . "','" . $gr . "','1','1','1','1','1');");


        echo ("success");
    }
}
