<?php


require "connection.php";


$aoemail = $_POST["e"];


$aors = Database::search("SELECT * FROM `academic_officer`");
$aodata = $aors->fetch_assoc();




if ($aodata["act_status_id"] == 2) {


    Database::iud("UPDATE `academic_officer` SET `ver_status_id`='2' WHERE `email`='" . $aoemail . "'");

    echo ("success");
} else {

    echo ("Not Accepted Invitation");
}

?>