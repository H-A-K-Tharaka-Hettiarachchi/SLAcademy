<?php

session_start();
require "connection.php";

if (isset($_SESSION["admin"])) {


    $rs = Database::search("SELECT * FROM `admin` WHERE `email`='" . $_SESSION["admin"]["email"] . "'");
    $adata = $rs->fetch_assoc();
} else {

    header('Location: ' . 'index.php');
}



?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SL_Academi</title>

    <link rel="icon" href="icon/academi_4096px.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>

<body class="bg-primary">

    <div class="container-fluid">
        <div class="row ">
            <div class="col-12">
                <div class="row">

                    <hr>
                    <div class="col-12 bg-info mb-5">
                        <div class="row">

                            <div class="title4 col-5 offset-3 d-none d-lg-block text-center mb-3 mt-3">~SL Academi~</div>

                            <div class="col-3 mb-3 mt-3 d-none d-lg-block">

                                <img src="icon/academi_4096px.png" style="height: 100px;" class="rounded-circle bg-light">

                            </div>
                            <div class="col-4 text-center offset-4 mb-3 mt-3 d-block  d-lg-none">

                                <img src="icon/academi_4096px.png" style="height: 150px;" class="rounded-circle bg-light">

                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class=" col-12 bg-dark text-center ">
                        <div class="row">
                            <nav class="p-0">
                                <div class="nav nav-tabs justify-content-center " id="nav-tab" role="tablist">
                                    <button class="nav-link active border border-0 fs-5" id="nav-ma-tab" data-bs-toggle="tab" data-bs-target="#nav-ma" type="button" role="tab" aria-controls="nav-ma" aria-selected="true">Administration</button>
                                    <button class="nav-link border border-0 fs-5" id="nav-mt-tab" data-bs-toggle="tab" data-bs-target="#nav-mt" type="button" role="tab" aria-controls="nav-mt" aria-selected="false">Teachers</button>
                                    <button class="nav-link border border-0 fs-5" id="nav-ms-tab" data-bs-toggle="tab" data-bs-target="#nav-ms" type="button" role="tab" aria-controls="nav-ms" aria-selected="false">Students</button>
                                    <button class="nav-link border border-0 fs-5" id="nav-mao-tab" data-bs-toggle="tab" data-bs-target="#nav-mao" type="button" role="tab" aria-controls="nav-mao" aria-selected="false">Academic Officers</button>
                                    <button class="nav-link border border-0 fs-5" id="nav-pro-tab" data-bs-toggle="tab" data-bs-target="#nav-pro" type="button" role="tab" aria-controls="nav-pro" aria-selected="false">Profile</button>

                                </div>
                            </nav>
                            <div class="tab-content bg-dark" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="nav-ma" role="tabpanel" aria-labelledby="nav-ma-tab" tabindex="0">


                                    <div class="col-12 bg-dark mt-3 mb-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">

                                                    <div class="col-12 offset-0 col-lg-10 offset-lg-1 dark-purple rounded mt-5">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="row">

                                                                    <div class="col-4 mt-5">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="row">
                                                                                    <div class="col-8 offset-2">
                                                                                        <div class="row">
                                                                                            <div class="col-12">
                                                                                                <?php

                                                                                                $srs = Database::search("SELECT * FROM `student`");
                                                                                                $snum = $srs->num_rows;

                                                                                                ?>
                                                                                                <h1 class=" text-white">(<?php echo $snum; ?>) Students</h1>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <img src="icon/woman_student_icon.svg" class="d-none d-lg-block img-fluid" style="height: 100px; margin-left: 35%;">
                                                                                                <img src="icon/woman_student_icon.svg" class="d-block d-lg-none img-fluid" style="height: 70px;  margin-left: 25%;">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-4 mt-5">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="row">
                                                                                    <div class="col-8 offset-2">
                                                                                        <div class="row">
                                                                                            <div class="col-12">
                                                                                                <?php

                                                                                                $trs = Database::search("SELECT * FROM `teacher`");
                                                                                                $tnum = $trs->num_rows;

                                                                                                ?>
                                                                                                <h1 class=" text-white">(<?php echo $tnum; ?>) Teachers</h1>
                                                                                            </div>
                                                                                            <div class="col-12 ">
                                                                                                <img src="icon/teacher_icon.png" class="d-none d-lg-block img-fluid" style="height: 100px; margin-left: 35%;">
                                                                                                <img src="icon/teacher_icon.png" class="d-block d-lg-none img-fluid" style="height: 70px;  margin-left: 25%;">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-4 mt-5">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="row">
                                                                                    <div class="col-8 offset-2">
                                                                                        <div class="row">
                                                                                            <div class="col-12">
                                                                                                <?php

                                                                                                $aors = Database::search("SELECT * FROM `academic_officer`");
                                                                                                $aonum = $aors->num_rows;

                                                                                                ?>
                                                                                                <h1 class=" text-white">(<?php echo $aonum; ?>) Officers</h1>
                                                                                            </div>
                                                                                            <div class="col-12 text-center">
                                                                                                <img src="icon/academic_officer_icon.png" class="d-none d-lg-block img-fluid" style="height: 100px; margin-left: 35%;">
                                                                                                <img src="icon/academic_officer_icon.png" class="d-block d-lg-none img-fluid" style="height: 70px; margin-left: 25%;">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class=" col-12 mt-5">
                                                        <div class="row">

                                                            <div class="col-12 col-lg-6 mb-5">
                                                                <div class="row">

                                                                    <div class="col-12 offset-0 col-lg-10 offset-lg-1  fs-4 fw-bold text-white dark-purple">New Students</div>
                                                                    <div class="col-12">
                                                                        <div class="row">

                                                                            <?php

                                                                            $student_rs = Database::search("SELECT * FROM `student` INNER JOIN `grade` ON student.grade_id=grade.id INNER JOIN `gender` ON student.gender_id=gender.id LIMIT 3 ");
                                                                            $student_num = $student_rs->num_rows;

                                                                            for ($a = 1; $a <= $student_num; $a++) {

                                                                                $student_data = $student_rs->fetch_assoc();

                                                                            ?>

                                                                                <div class="col-12 offset-0 col-lg-10 offset-lg-1  bg-secondary mt-5 mb-3" style="height: 70px;">
                                                                                    <div class="row">
                                                                                        <div class="col-2 offset-1">
                                                                                            <?php

                                                                                            if (!empty($student_data["image"])) {
                                                                                            ?>
                                                                                                <label class="form-label"><img src="<?php echo $student_data["image"]; ?>" class="round rounded-circle mt-2" style="height: 50px;"></label>
                                                                                            <?php
                                                                                            } else {
                                                                                            ?>
                                                                                                <label class="form-label"><img src="icon/user_icon.png" class="round rounded-circle" style="height: 50px;"></label>
                                                                                            <?php
                                                                                            }
                                                                                            ?>

                                                                                        </div>
                                                                                        <div class="col-5  text-center mt-3 text-white fs-5">
                                                                                            <?php echo $student_data["fname"] . " " . $student_data["lname"]; ?>
                                                                                        </div>
                                                                                        <div class="col-2   text-center mt-3 text-white fs-5">
                                                                                            <?php echo $student_data["grade"]; ?>
                                                                                        </div>
                                                                                        <div class="col-2   text-center mt-3 text-white fs-5">
                                                                                            <?php echo $student_data["gender"]; ?>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            <?php
                                                                            }


                                                                            ?>



                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-6 mb-5">
                                                                <div class="row">

                                                                    <div class="col-12 offset-0 col-lg-10 offset-lg-1  fs-4 fw-bold text-white dark-purple">Recent Payments</div>
                                                                    <div class="col-12">
                                                                        <div class="row">

                                                                            <?php

                                                                            $payrs = Database::search("SELECT * FROM `student_has_payment` INNER JOIN `student` ON student_has_payment.student_id=student.id   LIMIT 3 ");


                                                                            $paynum = $payrs->num_rows;


                                                                            for ($p = 1; $p <= $paynum; $p++) {

                                                                                $paydata = $payrs->fetch_assoc();

                                                                            ?>

                                                                                <div class="col-12 offset-0 col-lg-10 offset-lg-1 bg-secondary mb-3 mt-5" style="height: 70px;">
                                                                                    <div class="row">
                                                                                        <div class="col-5  mt-3 text-white fs-5">
                                                                                            <?php echo $paydata["fname"] . " " . $paydata["lname"];  ?>
                                                                                        </div>
                                                                                        <div class="col-2   mt-3 text-white fs-5">
                                                                                            Rs.<?php echo $paydata["total"]; ?>.00
                                                                                        </div>
                                                                                        <div class="col-4 offset-1   mt-3 text-white fs-5">
                                                                                            <?php echo $paydata["pay_date"]; ?>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            <?php


                                                                            }

                                                                            ?>




                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane fade bg-body" id="nav-mt" role="tabpanel" aria-labelledby="nav-mt-tab" tabindex="0">

                                    <div class="col-12 bg-dark mt-3 mb-5">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <div class="row">


                                                    <div class="col-12 mt-5">
                                                        <div class="row">
                                                            <div class="col-10 offset-1 col-lg-6 offset-lg-2 mt-3 "><input type="text" class="form-control"></div>
                                                            <div class="col-10 offset-1 col-lg-2 offset-lg-1 d-grid mt-3 mb-3"><button class="btn btn-primary">Search</button></div>
                                                        </div>
                                                    </div>
                                                    <hr class="text-white">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-12 offset-0 col-lg-10 offset-lg-1">
                                                                <div class="row">

                                                                    <div class="col-12">
                                                                        <div class="row">

                                                                            <div class="col-12 text-end mt-5">
                                                                                <label class="form-label fs-5 cursor  btn btn-outline-secondary text-white" onclick="window.location='teacherRegister.php';">Register New Teacher <i class="bi bi-plus-lg fs-5"></i></label>
                                                                            </div>

                                                                            <hr class="text-white">


                                                                            <div class="col-12 mt-3 mb-5 text-white">
                                                                                <div class="row">
                                                                                    <div class="col-1 fs-5 fw-bold border-1 border-bottom border-white border-end">ID</div>
                                                                                    <div class="col-5 col-lg-5 col-xl-3 fs-5 fw-bold border-1 border-bottom border-white border-end">Name</div>
                                                                                    <div class="col-3 fs-5 fw-bold border-1 border-bottom border-white border-end d-none d-lg-none d-xl-block">Email</div>
                                                                                    <div class="col-2 fs-5 fw-bold border-1 border-bottom border-white border-end">Status</div>
                                                                                    <div class="col-2 fs-5 fw-bold border-1 border-bottom border-white border-end">Confirm</div>
                                                                                    <div class="col-2 col-lg-2 col-xl-1 border-1 border-bottom border-white"></div>
                                                                                    <hr>

                                                                                    <?php


                                                                                    $trs = Database::search("SELECT * FROM `teacher`");
                                                                                    $tnum = $trs->num_rows;

                                                                                    for ($x = 1; $x <= $tnum; $x++) {

                                                                                        $tdata = $trs->fetch_assoc();

                                                                                    ?>

                                                                                        <div class="col-1 fs-5 border-1 border-bottom border-white border-end">0<?php echo ($x); ?></div>
                                                                                        <div class="col-1 d-none d-lg-none d-xl-block border-1 border-bottom border-white mt-1" style="background-image: url('icon/user_icon.png'); background-size: contain; height: 40px; background-repeat: no-repeat; background-position-x: right;"></div>
                                                                                        <div class="col-5 col-lg-5 col-xl-2 fs-5 border-1 border-bottom border-white border-end"><?php echo ($tdata["fname"] . " " . $tdata["lname"]); ?></div>
                                                                                        <div class="col-3 fs-5 d-none d-lg-none d-xl-block border-1 border-bottom border-white border-end"><?php echo ($tdata["email"]); ?></div>

                                                                                        <?php


                                                                                        $inv_status = $tdata["inv_status_id"];
                                                                                        $ver_status = $tdata["ver_status_id"];
                                                                                        $blo_status = $tdata["blo_status_id"];


                                                                                        if ($inv_status == 1) {
                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end"><button class="btn btn-success mt-1 mb-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="tInvite('<?php echo $tdata['email']; ?> ');">Invite</button></div>


                                                                                        <?php
                                                                                        } else if ($inv_status == 2 && $ver_status == 1) {
                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end "><button class="btn btn-success mt-1 mb-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="tInvite('<?php echo $tdata['email']; ?> ');">Re-Invite</button></div>
                                                                                        <?php
                                                                                        } else if ($inv_status == 2 && $ver_status == 2) {
                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end "><button class="btn btn-success mt-1 mb-1 disabled">Invited</button></div>
                                                                                        <?php
                                                                                        }
                                                                                        if ($inv_status == 1 && $ver_status == 1) {
                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end"><button class="btn btn-warning mt-1 mb-1 disabled">Verify</button></div>

                                                                                        <?php
                                                                                        } else if ($inv_status == 2 && $ver_status == 1) {

                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end"><button class="btn btn-warning mt-1 mb-1" onclick="tVerify('<?php echo $tdata['email']; ?>');">Verify</button></div>

                                                                                        <?php

                                                                                        } else if ($inv_status == 2 && $ver_status == 2) {
                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end"><button class="btn btn-warning mt-1 mb-1 disabled">Verifyed</button></div>

                                                                                        <?php
                                                                                        }

                                                                                        if ($ver_status == 1) {
                                                                                        ?>
                                                                                            <div class="col-2 col-lg-2 col-xl-1 fs-5 border-1 border-bottom border-white"> <button class=" btn btn-danger mt-1 mb-1 disabled">Block</button></div>
                                                                                        <?php
                                                                                        } else if ($ver_status == 2 && $blo_status == 1) {
                                                                                        ?>
                                                                                            <div class="col-2 col-lg-2 col-xl-1 fs-5 border-1 border-bottom border-white"> <button class=" btn btn-danger mt-1 mb-1" onclick="tBlockUnblock('<?php echo $tdata['email']; ?>');" id="tblock">Block</button></div>

                                                                                        <?php

                                                                                        } else if ($ver_status == 2 && $blo_status == 2) {
                                                                                        ?>
                                                                                            <div class="col-2 col-lg-2 col-xl-1 fs-5 border-1 border-bottom border-white"> <button class=" btn btn-danger mt-1 mb-1 " onclick="tBlockUnblock('<?php echo $tdata['email']; ?>');" id="tblock">UnBlock</button></div>

                                                                                        <?php
                                                                                        }

                                                                                        ?>

                                                                                        <hr>

                                                                                        <!-- Button trigger modal -->


                                                                                        <!-- Modal -->
                                                                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                                            <div class="modal-dialog modal-dialog-centered">
                                                                                                <div class="modal-content bg-dark">
                                                                                                    <div class="modal-header">
                                                                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Teacher Invitation</h1>
                                                                                                        <button type="button" class="btn-close bg-body" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                    </div>
                                                                                                    <div class="modal-body">
                                                                                                        <div class="col-12">
                                                                                                            <div class="row">
                                                                                                                <div class="col-12">

                                                                                                                    <div class="col-11 offset-0 mt-3">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-12 text-start">
                                                                                                                                <label class="form-label text-white fw-bold">User Name</label>
                                                                                                                                <input type="text" class="form-control" id="tun">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-11 offset-0 mt-3">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-12 text-start">
                                                                                                                                <label class="form-label text-white fw-bold">Password</label>
                                                                                                                                <input type="password" class="form-control" id="tp">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="modal-footer">
                                                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cansel</button>
                                                                                                        <button type="button" class="btn btn-primary" onclick="sentTeacherInvitation();">Send</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>


                                                                                    <?php



                                                                                    }



                                                                                    ?>






                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade bg-body" id="nav-ms" role="tabpanel" aria-labelledby="nav-ms-tab" tabindex="0">

                                    <div class="col-12 bg-dark mt-3 mb-5">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <div class="row">


                                                    <div class="col-12 mt-5">
                                                        <div class="row">
                                                            <div class="col-10 offset-1 col-lg-6 offset-lg-2 mt-3 "><input type="text" class="form-control"></div>
                                                            <div class="col-10 offset-1 col-lg-2 offset-lg-1 d-grid mt-3 mb-3"><button class="btn btn-primary">Search</button></div>
                                                        </div>
                                                    </div>
                                                    <hr class="text-white">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-12 offset-0 col-lg-10 offset-lg-1">
                                                                <div class="row">

                                                                    <div class="col-12 mt-5">
                                                                        <div class="row">



                                                                            <hr class="text-white">


                                                                            <div class="col-12 mt-3 mb-5 text-white">
                                                                                <div class="row">
                                                                                    <div class="col-1 fs-5 fw-bold border-1 border-bottom border-white border-end">ID</div>
                                                                                    <div class="col-5 col-lg-5 col-xl-3 fs-5 fw-bold border-1 border-bottom border-white border-end">Name</div>
                                                                                    <div class="col-3 fs-5 fw-bold border-1 border-bottom border-white border-end d-none d-lg-none d-xl-block">Email</div>
                                                                                    <div class="col-2 fs-5 fw-bold border-1 border-bottom border-white border-end">Pay/Not Payed</div>
                                                                                    <div class="col-2 fs-5 fw-bold border-1 border-bottom border-white border-end">Confirm</div>
                                                                                    <div class="col-2 col-lg-2 col-xl-1 border-1 border-bottom border-white"></div>
                                                                                    <hr>

                                                                                    <?php

                                                                                    $strs = Database::search("SELECT * FROM `student` INNER JOIN `pay_status` ON student.pay_status_id=pay_status.id");
                                                                                    $stnum = $strs->num_rows;

                                                                                    for ($y = 1; $y <= $stnum; $y++) {

                                                                                        $stdata = $strs->fetch_assoc();

                                                                                    ?>

                                                                                        <div class="col-1 fs-5 border-1 border-bottom border-white border-end">0<?php echo $y; ?></div>
                                                                                        <div class="col-1 d-none d-lg-none d-xl-block border-1 border-bottom border-white mt-1 "><img class="rounded-circle" src="<?php echo $stdata["image"]; ?>" style=" height: 40px;   width: 40px;"></div>
                                                                                        <div class="col-5 col-lg-5 col-xl-2 fs-5 border-1 border-bottom border-white border-end"><?php echo $stdata["fname"] . " " . $stdata["lname"]; ?></div>
                                                                                        <div class="col-3 fs-5 d-none d-lg-none d-xl-block border-1 border-bottom border-white border-end"><?php echo $stdata["email"]; ?></div>
                                                                                        <div class="col-2 fs-5 border-1 border-bottom border-white border-end"><label class="form-label mt-1 mb-1"><?php echo $stdata["pay_status"]; ?></label></div>

                                                                                        <?php


                                                                                        $inv_status = $stdata["inv_status_id"];
                                                                                        $ver_status = $stdata["ver_status_id"];
                                                                                        $blo_status = $stdata["blo_status_id"];
                                                                                        $pay_status = $stdata["pay_status_id"];



                                                                                        if ($inv_status == 1 && $ver_status == 1) {
                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end"><button class="btn btn-warning mt-1 mb-1 disabled">Verify</button></div>

                                                                                        <?php
                                                                                        } else if ($inv_status == 2 && $ver_status == 1) {

                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end"><button class="btn btn-warning mt-1 mb-1" onclick="stVerify('<?php echo $stdata['email']; ?>');">Verify</button></div>

                                                                                        <?php

                                                                                        } else if ($inv_status == 2 && $ver_status == 2) {
                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end"><button class="btn btn-warning mt-1 mb-1 disabled">Verifyed</button></div>

                                                                                        <?php
                                                                                        }

                                                                                        if ($ver_status == 1) {
                                                                                        ?>
                                                                                            <div class="col-2 col-lg-2 col-xl-1 fs-5 border-1 border-bottom border-white"> <button class=" btn btn-danger mt-1 mb-1 disabled">Block</button></div>
                                                                                        <?php
                                                                                        } else if ($ver_status == 2 && $blo_status == 1) {
                                                                                        ?>
                                                                                            <div class="col-2 col-lg-2 col-xl-1 fs-5 border-1 border-bottom border-white"> <button class=" btn btn-danger mt-1 mb-1" onclick="stBlockUnblock('<?php echo $stdata['email']; ?>');" id="stblock">Block</button></div>

                                                                                        <?php
                                                                                        } else if ($ver_status == 2 && $blo_status == 2) {
                                                                                        ?>
                                                                                            <div class="col-2 col-lg-2 col-xl-1 fs-5 border-1 border-bottom border-white"> <button class=" btn btn-danger mt-1 mb-1 " onclick="stBlockUnblock('<?php echo $stdata['email']; ?>');" id="stblock">UnBlock</button></div>

                                                                                    <?php
                                                                                        }
                                                                                    }
                                                                                    ?>




                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade bg-body" id="nav-mao" role="tabpanel" aria-labelledby="nav-mao-tab" tabindex="0">

                                    <div class="col-12 bg-dark mt-3 mb-5">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <div class="row">

                                                    <div class="col-12 mt-5">
                                                        <div class="row">
                                                            <div class="col-10 offset-1 col-lg-6 offset-lg-2 mt-3 "><input type="text" class="form-control"></div>
                                                            <div class="col-10 offset-1 col-lg-2 offset-lg-1 d-grid mt-3 mb-3"><button class="btn btn-primary">Search</button></div>
                                                        </div>
                                                    </div>
                                                    <hr class="text-white">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-12 offset-0 col-lg-10 offset-lg-1">
                                                                <div class="row">

                                                                    <div class="col-12">
                                                                        <div class="row">

                                                                            <div class="col-12 text-end mt-5">
                                                                                <label class="form-label fs-5 cursor  btn btn-outline-secondary text-white" onclick="window.location='academicOfficerRegister.php';">Register New Officer <i class="bi bi-plus-lg fs-5"></i></label>
                                                                            </div>

                                                                            <hr class="text-white">


                                                                            <div class="col-12 mt-3 mb-5 text-white">
                                                                                <div class="row">
                                                                                    <div class="col-1 fs-5 fw-bold border-1 border-bottom border-white border-end">ID</div>
                                                                                    <div class="col-5 col-lg-5 col-xl-3 fs-5 fw-bold border-1 border-bottom border-white border-end">Name</div>
                                                                                    <div class="col-3 fs-5 fw-bold border-1 border-bottom border-white border-end d-none d-lg-none d-xl-block">Email</div>
                                                                                    <div class="col-2 fs-5 fw-bold border-1 border-bottom border-white border-end">Status</div>
                                                                                    <div class="col-2 fs-5 fw-bold border-1 border-bottom border-white border-end">Confirm</div>
                                                                                    <div class="col-2 col-lg-2 col-xl-1 border-1 border-bottom border-white"></div>
                                                                                    <hr>


                                                                                    <?php


                                                                                    $aors = Database::search("SELECT * FROM `academic_officer`");
                                                                                    $aonum = $aors->num_rows;

                                                                                    for ($y = 1; $y <= $aonum; $y++) {

                                                                                        $aodata = $aors->fetch_assoc();

                                                                                    ?>

                                                                                        <div class="col-1 fs-5 border-1 border-bottom border-white border-end">0<?php echo ($y); ?></div>
                                                                                        <div class="col-1 d-none d-lg-none d-xl-block border-1 border-bottom border-white mt-1" style="background-image: url('icon/user_icon.png'); background-size: contain; height: 40px; background-repeat: no-repeat; background-position-x: right;"></div>
                                                                                        <div class="col-5 col-lg-5 col-xl-2 fs-5 border-1 border-bottom border-white border-end"><?php echo ($aodata["fname"] . " " . $aodata["lname"]); ?></div>
                                                                                        <div class="col-3 fs-5 d-none d-lg-none d-xl-block border-1 border-bottom border-white border-end"><?php echo ($aodata["email"]); ?></div>

                                                                                        <?php


                                                                                        $inv_status = $aodata["inv_status_id"];
                                                                                        $ver_status = $aodata["ver_status_id"];
                                                                                        $blo_status = $aodata["blo_status_id"];


                                                                                        if ($inv_status == 1) {
                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end"><button class="btn btn-success mt-1 mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="aoInvite('<?php echo $aodata['email']; ?> ');">Invite</button></div>


                                                                                        <?php
                                                                                        } else if ($inv_status == 2 && $ver_status == 1) {
                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end "><button class="btn btn-success mt-1 mb-1 " data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="aoInvite('<?php echo $aodata['email']; ?> ');">Re-Invite</button></div>
                                                                                        <?php
                                                                                        } else if ($inv_status == 2 && $ver_status == 2) {
                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end "><button class="btn btn-success mt-1 mb-1 disabled">Invited</button></div>
                                                                                        <?php
                                                                                        }
                                                                                        if ($inv_status == 1 && $ver_status == 1) {
                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end"><button class="btn btn-warning mt-1 mb-1 disabled">Verify</button></div>

                                                                                        <?php
                                                                                        } else if ($inv_status == 2 && $ver_status == 1) {

                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end"><button class="btn btn-warning mt-1 mb-1" onclick="aoVerify('<?php echo $aodata['email']; ?>');">Verify</button></div>

                                                                                        <?php

                                                                                        } else if ($inv_status == 2 && $ver_status == 2) {
                                                                                        ?>
                                                                                            <div class="col-2 fs-5 border-1 border-bottom border-white border-end"><button class="btn btn-warning mt-1 mb-1 disabled">Verifyed</button></div>

                                                                                        <?php
                                                                                        }

                                                                                        if ($ver_status == 1) {
                                                                                        ?>
                                                                                            <div class="col-2 col-lg-2 col-xl-1 fs-5 border-1 border-bottom border-white"> <button class=" btn btn-danger mt-1 mb-1 disabled">Block</button></div>
                                                                                        <?php
                                                                                        } else if ($ver_status == 2 && $blo_status == 1) {
                                                                                        ?>
                                                                                            <div class="col-2 col-lg-2 col-xl-1 fs-5 border-1 border-bottom border-white"> <button class=" btn btn-danger mt-1 mb-1" onclick="aoBlockUnblock('<?php echo $aodata['email']; ?>');" id="aoblock">Block</button></div>

                                                                                        <?php
                                                                                        } else if ($ver_status == 2 && $blo_status == 2) {
                                                                                        ?>
                                                                                            <div class="col-2 col-lg-2 col-xl-1 fs-5 border-1 border-bottom border-white"> <button class=" btn btn-danger mt-1 mb-1 " onclick="aoBlockUnblock('<?php echo $aodata['email']; ?>');" id="aoblock">UnBlock</button></div>

                                                                                        <?php
                                                                                        }

                                                                                        ?>


                                                                                        <hr>


                                                                                        <!-- Button trigger modal -->


                                                                                        <!-- Modal -->
                                                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                            <div class="modal-dialog modal-dialog-centered">
                                                                                                <div class="modal-content bg-dark">
                                                                                                    <div class="modal-header">
                                                                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Academic Officer Invitation</h1>
                                                                                                        <button type="button" class="btn-close bg-body" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                    </div>
                                                                                                    <div class="modal-body">
                                                                                                        <div class="col-12">
                                                                                                            <div class="row">
                                                                                                                <div class="col-12">

                                                                                                                    <div class="col-11 offset-0 mt-3">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-12 text-start">
                                                                                                                                <label class="form-label text-white fw-bold">User Name</label>
                                                                                                                                <input type="text" class="form-control" id="aoun">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-11 offset-0 mt-3">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-12 text-start">
                                                                                                                                <label class="form-label text-white fw-bold">Password</label>
                                                                                                                                <input type="password" class="form-control" id="aop">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="modal-footer">
                                                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cansel</button>
                                                                                                        <button type="button" class="btn btn-primary" onclick="sentAcademicOfficerInvitation();">Send</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>





                                                                                    <?php

                                                                                    }

                                                                                    ?>






                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade bg-body" id="nav-pro" role="tabpanel" aria-labelledby="nav-pro-tab" tabindex="0">

                                    <div class="col-12 bg-dark mt-3">
                                        <div class="row">
                                            <div class="col-12 mt-5">
                                                <div class="row">

                                                    <div class="col-12 col-lg-4">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-8 mt-5 offset-2">
                                                                        <div class="row">
                                                                            <div class="col-12 mt-5">
                                                                                <div class="row">

                                                                                    <div class="col-12 mt-5 mb-3">
                                                                                        <div class="d-flex flex-column align-items-center">
                                                                                            <input type="file" id="image" class="d-none" accept="image/*" />
                                                                                            <label for="image" onclick="changeAImage();">

                                                                                                <?php

                                                                                                $ars = Database::search("SELECT * FROM `admin`");
                                                                                                $adata = $ars->fetch_assoc();

                                                                                                if (empty($adata["image"])) {
                                                                                                ?>
                                                                                                    <img src="icon/user_icon.png" class="rounded-circle" style="width: 150px; height: 150px;" id="img">
                                                                                                <?php
                                                                                                } else {
                                                                                                ?>
                                                                                                    <img src="<?php echo $adata["image"]; ?>" class="rounded-circle" style="width: 150px; height: 150px;" id="img">
                                                                                                <?php
                                                                                                }

                                                                                                ?>


                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        <label class="form-label text-white mt-3 mb-3"><?php echo $adata["fname"] . " " . $adata["lname"]; ?></label>
                                                                                    </div>
                                                                                    <div class="col-6 offset-3 mb-3 mt-3">
                                                                                        <button class=" btn btn-warning" onclick="uploadAImage('<?php echo $adata['email']; ?>');">Upload Image</button>
                                                                                    </div>

                                                                                    <div class="col-8 offset-2 mb-3 mt-5">
                                                                                        <button class=" btn btn-danger" onclick="adminLogout();">Log Out</button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-lg-8">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="row">

                                                                    <div class="col-8 offset-2 mt-5 mb-5">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="row">

                                                                                    <div class="col-12 text-start mt-5 mb-3 ">
                                                                                        <label class="form-label fw-bold text-white ">First Name</label>
                                                                                        <input type="text " class="form-control" value="<?php echo $adata["fname"]; ?>" id="f">
                                                                                    </div>

                                                                                    <div class="col-12 text-start mb-3">
                                                                                        <label class="form-label fw-bold text-white ">Last Name</label>
                                                                                        <input type="text" class="form-control" value="<?php echo $adata["lname"]; ?>" id="l">
                                                                                    </div>
                                                                                    <div class="col-12 text-start mb-3">
                                                                                        <label class="form-label fw-bold text-white ">NIC</label>
                                                                                        <input type="text" class="form-control" value="<?php echo $adata["nic"]; ?>" id="n">
                                                                                    </div>
                                                                                    <div class="col-12 text-start mb-3">
                                                                                        <label class="form-label fw-bold text-white ">Mobile</label>
                                                                                        <input type="text" class="form-control" value="<?php echo $adata["mobile"]; ?>" id="m">
                                                                                    </div>
                                                                                    <div class="col-12 text-start mb-3">
                                                                                        <label class="form-label fw-bold text-white">Address</label>
                                                                                        <input type="text" class="form-control" value="<?php echo $adata["address"]; ?>" id="a">
                                                                                    </div>
                                                                                    <div class="col-12 text-start mb-3">
                                                                                        <label class="form-label fw-bold text-white ">Gender</label>
                                                                                        <select name="gender" class="form-select" id="g">

                                                                                            <?php

                                                                                            $gender_rs = Database::search("SELECT * FROM `gender`");
                                                                                            $gender_num = $gender_rs->num_rows;

                                                                                            for ($x = 0; $x < $gender_num; $x++) {

                                                                                                $gender_data = $gender_rs->fetch_assoc();

                                                                                            ?>
                                                                                                <option value="<?php echo $gender_data["id"]; ?>"><?php echo $gender_data["gender"]; ?></option>
                                                                                            <?php
                                                                                            }

                                                                                            ?>


                                                                                        </select>
                                                                                    </div>


                                                                                    <div class="col-12 mt-3 mb-5 d-grid">
                                                                                        <button class="btn btn-success" onclick="updateAdminProfile('<?php echo $adata['email']; ?>');">Update Profile</button>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>

</body>

</html>