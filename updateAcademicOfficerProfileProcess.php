<?php

session_start();

require "connection.php";


$f = $_POST["f"];
$l = $_POST["l"];
$n = $_POST["n"];
$m = $_POST["m"];
$a = $_POST["a"];
$g = $_POST["g"];
$email = $_POST["e"];



if (empty($f)) {
    echo ("please Enter Your First Name");
} else if (empty($l)) {
    echo ("Please Enter Your Last Name");
} else if (empty($n)) {
    echo ("Please Enter Your NIC");
} else if (empty($m)) {
    echo ("Please Enter Your Mobile Number");
} else if (strlen($m) != 10) {
    echo ("Mobile Number Must be 10 Numbers");
} else if (!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/", $m)) {
    echo ("Invalid Mobile Number");
} else if (empty($a)) {
    echo ("Please Enter Your Address");
} else if (empty($g)) {
    echo ("Please Select Your Gender");
} else {

    Database::iud("UPDATE `academic_officer` SET `fname`='" . $f . "',`lname`='" . $l . "',`nic`='" . $n . "',`mobile`='" . $m . "',`address`='" . $a . "',`gender_id`='" . $g . "' WHERE `email`='" . $email . "'");
    
    echo ("success");
}
