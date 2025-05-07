<?php

session_start();

require "connection.php";

if (isset($_POST["vc"])) {

$vc=$_POST["vc"];

    $admin = Database::search("SELECT * FROM `admin` WHERE `verification_code`='" . $vc . "'");
    $num = $admin->num_rows;

    if ($num == 1) {

        $data = $admin->fetch_assoc();

        $_SESSION["admin"] = $data;

        echo ("success");

    } else {

        echo ("Invalid Verification Code.");

    }

} else {

    echo ("Please Enter Your Verification Code");
}
