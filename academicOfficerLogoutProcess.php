<?php

session_start();
require "connection.php";

if (isset($_SESSION["academic_officer"])) {

    Database::iud("UPDATE `academic_officer` SET `verification_code`='' ");

    $_SESSION["academic_officer"] = null;
    session_destroy();

    echo ("success");
}
