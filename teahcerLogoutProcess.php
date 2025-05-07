<?php

session_start();
require "connection.php";

if (isset($_SESSION["teacher"])) {

    Database::iud("UPDATE `teacher` SET `verification_code`='' ");

    $_SESSION["teacher"] = null;
    session_destroy();

    echo ("success");
}
