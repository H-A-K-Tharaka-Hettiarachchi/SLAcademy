<?php

session_start();
require "connection.php";


if (isset($_SESSION["student"])) {


    $id =  $_GET["id"];

    $srs = Database::search("SELECT * FROM `student` WHERE `id`='" . $id . "'");

    $sdata = $srs->fetch_assoc();

    $prs = Database::search("SELECT * FROM `payment`");

    $pdata = $prs->fetch_assoc();


    $email = $sdata["email"];

    $array;


    $amount = $pdata["value"] - $pdata["discount"];

    $fname = $sdata["fname"];
    $lname = $sdata["lname"];
    $mobile = $sdata["mobile"];
    $address = $sdata["address"];


    $start_date = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $start_date->setTimezone($tz);
    $dateTime = $start_date->format("Y-m-d H:i:s");



    $splitDate = explode(" ", $dateTime); //separate date from time
    $pdate = $splitDate[0]; // date
    $ptime = $splitDate[1]; //time


    $splitMonth = explode("-", $pdate); //separate date as year,month & date
    $pyear = $splitMonth[0]; //year
    $pmonth = $splitMonth[1]; //month
    $pday = $splitMonth[2]; //day

    $splitTime = explode(":", $ptime); //separate time as hour,minute & second
    $phour = $splitTime[0]; //hour
    $pminute = $splitTime[1]; //minute
    $psecond = $splitTime[2]; //secon


    $today = new DateTime($pyear . "-" . $pmonth . "-" . $pday . " " . $phour . ":" . $pminute . ":" . $psecond);
    $payDate = $today->format("Y-m-d H:i:s");



    $nextPayDate = new DateTime($pyear . "-" . $pmonth + 1 . "-" . $pday . " " . $phour . ":" . $pminute . ":" . $psecond);
    $endDate = $nextPayDate->format("Y-m-d H:i:s");



    Database::iud("UPDATE `student` SET `pay_status_id`='2', `next_payment_date`='" . $endDate . "',`pay_date`='" . $payDate . "' WHERE `id`='" . $id . "' ");
    Database::iud("INSERT INTO `student_has_payment` (`total`,`student_id`,`payment_id`) VALUES ('" . $pdata["value"] - $pdata["discount"] . "','" . $id . "','" . $pdata["id"] . "'); ");

    echo ("success");
} else {
    header('Location: ' . 'index.php');
}
