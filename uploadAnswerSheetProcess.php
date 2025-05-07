<?php


session_start();

require "connection.php";


if (isset($_POST["sid"])) {

    $sid = $_POST["sid"];
    $an = $_POST["an"];



    if (empty($an)) {
        echo ("Please Enter Assignment Name");
    } else {

        $rs = Database::search("SELECT * FROM `assignment_answer_sheets` INNER JOIN `assignment` ON assignment_answer_sheets.assignment_id=assignment.id WHERE `assignment_id`='" . $an . "' ");
        $num = $rs->num_rows;
        $data = $rs->fetch_assoc();

        $ars = Database::search("SELECT * FROM `assignment` WHERE `id` ='" . $an . "'");
        $adata = $ars->fetch_assoc();


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

                $file_name = "data/answer_sheet/" . $adata["assignment_name"] . "_" . uniqid() . $new_file_extention;



                if ($num == 1) {


                    Database::iud("UPDATE `assignment_answer_sheets` SET `path`='" . $file_name . "' ,  `student_id`='" . $sid . "' WHERE  `assignment_id`='" . $an . "' ");
                    move_uploaded_file($f["tmp_name"], $file_name);

                    echo ("success");
                } else {



                    Database::iud("INSERT INTO `assignment_answer_sheets` (`path`,`assignment_id`,`student_id`) VALUES ('" . $file_name . "','" . $an . "','" . $sid . "') ");
                    move_uploaded_file($f["tmp_name"], $file_name);
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
