<?php


session_start();

require "connection.php";




$mrk = $_POST["mrk"];
$st = $_POST["st"];
$sb = $_POST["sb"];
$an = $_POST["an"];
$as = $_POST["as"];



if (empty($mrk)) {
    echo ("Please Enter Mark");
} else if ($st == 0) {
    echo ("Please Select Student");
} else if ($sb == 0) {
    echo ("Please Select Subject");
} else if ($an == 0) {
    echo ("Please Select Assignment");
} else if ($as == 0) {
    echo ("Please Select Answer Sheet");
} else {

    Database::iud("INSERT INTO `assignment_marks` (`marks`,`student_id`,`assignment_id`,`assignment_answer_sheets_id`,`rel_mark_status_id`,`subject_id`) 
                    VALUES ('" . $mrk . "','" . $st . "','" . $an . "','" . $as . "','1','" . $sb . "'); ");


    echo ("success");
}
