<?php


require "connection.php";


if (isset($_GET["e"])) {

    $stemail = $_GET["e"];

    $rs = Database::search("SELECT * FROM `student` WHERE `email` = '" . $stemail . "'");
    $data = $rs->fetch_assoc();

    if ($data["blo_status_id"] == 1) {

        Database::iud("UPDATE `student` SET `blo_status_id`='2' WHERE `email`='" . $stemail . "'");
        echo ("blocked");
    } else if ($data["blo_status_id"] == 2) {

        Database::iud("UPDATE `student` SET `blo_status_id`='1' WHERE `email`='" . $stemail . "'");
        echo ("unblocked");
    }
} else {
    echo ("Something Went Wront Please Try Again Later");
}
