<?php


require "connection.php";


if (isset($_GET["id"])) {

    $id = $_GET["id"];

    $rs = Database::search("SELECT * FROM `assignment_marks` WHERE `id` = '" . $id . "'");
    $data = $rs->fetch_assoc();

    if ($data["rel_mark_status_id"] == 1) {

        Database::iud("UPDATE `assignment_marks` SET `rel_mark_status_id`='2' WHERE `id`='" . $id . "'");
        echo ("released");
    } else if ($data["rel_mark_status_id"] == 2) {

        Database::iud("UPDATE `assignment_marks` SET `rel_mark_status_id`='1' WHERE `id`='" . $id . "'");
        echo ("unreleased");
    }
} else {
    echo ("Something Went Wront Please Try Again Later");
}
