<?php

session_start();
require "connection.php";

if (isset($_SESSION["student"])) {

    Database::iud("UPDATE `student` SET `verification_code`='' ");

    $_SESSION["student"] = null;
    session_destroy();

    echo ("success");
}
