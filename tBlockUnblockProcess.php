<?php


require "connection.php";


if (isset($_GET["e"])) {

    $temail = $_GET["e"];

    $rs = Database::search("SELECT * FROM `teacher` WHERE `email` = '" . $temail . "'");
    $data = $rs->fetch_assoc();

    if ($data["blo_status_id"] == 1) {

        Database::iud("UPDATE `teacher` SET `blo_status_id`='2' WHERE `email`='" . $temail . "'");
        echo ("blocked");
    } else if ($data["blo_status_id"] == 2) {

        Database::iud("UPDATE `teacher` SET `blo_status_id`='1' WHERE `email`='" . $temail . "'");
        echo ("unblocked");
    }
} else {
    echo ("Something Went Wront Please Try Again Later");
}
