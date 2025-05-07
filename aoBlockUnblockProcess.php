<?php


require "connection.php";


if (isset($_GET["e"])) {

    $aoemail = $_GET["e"];

    $rs = Database::search("SELECT * FROM `academic_officer` WHERE `email` = '" . $aoemail . "'");
    $data = $rs->fetch_assoc();

    if ($data["blo_status_id"] == 1) {

        Database::iud("UPDATE `academic_officer` SET `blo_status_id`='2' WHERE `email`='" . $aoemail . "'");
        echo ("blocked");
    } else if ($data["blo_status_id"] == 2) {

        Database::iud("UPDATE `academic_officer` SET `blo_status_id`='1' WHERE `email`='" . $aoemail . "'");
        echo ("unblocked");
    }
} else {
    echo ("Something Went Wront Please Try Again Later");
}
