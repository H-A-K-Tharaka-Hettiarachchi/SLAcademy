<?php

session_start();
require "connection.php";

if (isset($_SESSION["student"])) {


    if (isset($_GET["id"])) {

        $srs = Database::search("SELECT * FROM `student` WHERE `id`='" . $_GET["id"] . "'");

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


        $array["id"] = $sdata["id"];
        $array["amount"] = $amount;
        $array["fname"] = $fname;
        $array["lname"] = $lname;
        $array["mobile"] = $mobile;
        $array["address"] = $address;
        $array["email"] = $email;

      
        echo json_encode($array);
    } else {
        echo ("2");
    }
} else {
    echo ("1");
}
