<?php

require "connection.php";

$f =  $_POST["f"];
$l = $_POST["l"];
$m = $_POST["m"];
$g = $_POST["g"];
$e = $_POST["e"];
$n = $_POST["n"];
$s = $_POST["s"];
$gr = $_POST["gr"];


if (empty($f)) {
    echo ("Please Enter First Name");
} else if (empty($l)) {
    echo ("Please Enter Last Name");
} else if (empty($m)) {
    echo ("Please Enter Mobile Number");
} else if (strlen($m) != 10) {
    echo ("Mobile must have 10 characters");
} else if (!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/", $m)) {
    echo ("Invalid Mobile !!!");
} else if ($g == "0") {
    echo ("Please Select Gender");
} else if (empty($e)) {
    echo ("Please Enter Email");
} else if (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email !!!");
} else if (empty($n)) {
    echo ("Please Enter NIC");
} else if ($s == "0" | $s == "1") {
    echo ("Please Select Subject");
} else if ($gr == "0" | $gr == "1") {
    echo ("Please Select Grade");
} else {

    $rs = Database::search("SELECT * FROM `teacher` WHERE `email`='" . $e . "' OR `mobile`='" . $m . "'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo ("User with the same Email or Mobile already exists.");
    } else {

        Database::iud("INSERT INTO `teacher` (`fname`,`lname`,`mobile`,`gender_id`,`email`,`nic`,`subject_id`,`grade_id`,`inv_status_id`,`ver_status_id`,`blo_status_id`,`act_status_id`) 
                      VALUES ('" . $f . "','" . $l . "','" . $m . "','" . $g . "','" . $e . "','" . $n . "','" . $s . "','" . $gr . "','1','1','1','1')");

       

        echo ("success");
    }
}
