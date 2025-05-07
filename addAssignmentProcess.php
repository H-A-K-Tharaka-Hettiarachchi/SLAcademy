<?php


session_start();

require "connection.php";


if (isset($_POST["email"])) {

    $email = $_POST["email"];
    $an = $_POST["an"];
    $gr = $_POST["gr"];
    $sb = $_POST["sb"];



    if (empty($an)) {
        echo ("Please Enter Assignment Name");
    } else if ($gr == 1) {
        echo ("Please Select Grade");
    } else if ($sb == 1) {
        echo ("Please Select Subject");
    } else {






        if (isset($_FILES["f"])) {

            $f = $_FILES["f"];

            $allowed_image_extentions = array("application/pdf");
            $file_ex = $f["type"];


            if (!in_array($file_ex, $allowed_image_extentions)) {
                echo ("Please Select PDF File.");
            } else {

                $new_file_extention;

                if ($file_ex == "application/pdf") {
                    $new_file_extention = ".pdf";
                }

                $file_name = "data/assignment/" . $an . "_" . uniqid() . $new_file_extention;




                $rs = Database::search("SELECT * FROM `assignment` WHERE `assignment_name`='" . $an . "'");

                $num = $rs->num_rows;

                if ($num == 1) {

                    echo ("This Lesson Name Already Exists.");
                } else {

                    Database::iud("INSERT INTO `assignment` (`assignment_name`,`grade_id`,`subject_id`,`teacher_email`) 
                    VALUES ('" . $an . "','" . $gr . "','" . $sb . "','" . $email . "'); ");

                    $id =  Database::$connection->insert_id;

                    move_uploaded_file($f["tmp_name"], $file_name);

                    Database::iud("UPDATE `assignment` SET `path` = '" . $file_name . "' WHERE `teacher_email` = '" . $email . "' AND `id` ='" . $id . "' ");

                    echo ("success");
                }
            }
        } else {
            echo ("Select Your File");
        }
    }
} else {
    echo ("Please Login Firstly");


    header('Location: ' . 'index.php');
}
