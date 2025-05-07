<?php


require "connection.php";


$temail = $_POST["e"];


$trs = Database::search("SELECT * FROM `teacher`");
$tdata = $trs->fetch_assoc();




if ($tdata["act_status_id"] == 2) {


    Database::iud("UPDATE `teacher` SET `ver_status_id`='2' WHERE `email`='" . $temail . "'");

    echo ("success");
} else {

    echo ("Not Accepted Invitation");
}

?>