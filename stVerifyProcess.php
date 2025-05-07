<?php


require "connection.php";


$stemail = $_POST["e"];


$trs = Database::search("SELECT * FROM `student`");
$tdata = $trs->fetch_assoc();




if ($tdata["act_status_id"] == 2) {


    Database::iud("UPDATE `student` SET `ver_status_id`='2' WHERE `email`='" . $stemail . "'");

    echo ("success");
} else {

    echo ("Not Accepted Invitation");
}

?>