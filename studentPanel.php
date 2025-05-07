<?php

session_start();
require "connection.php";



if (isset($_SESSION["student"])) {

    $email = $_SESSION["student"]["email"];

    $rs = Database::search("SELECT * FROM `student` WHERE `email`='" . $email . "'");
    $data = $rs->fetch_assoc();





    $today = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $today->setTimezone($tz);
    $dateTime = $today->format("Y-m-d H:i:s");

    if ($dateTime >= $data["next_payment_date"]) {

       


        Database::iud("UPDATE `student` SET `pay_status_id`='1' WHERE `id` ='" . $data["id"] . "'");
    }
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

<body class="bg-primary" onload="studentPayment();">

    <?php

    $data;

    if (isset($_SESSION["student"])) {

        $email = $_SESSION["student"]["email"];

        $rs = Database::search("SELECT * FROM `student` WHERE `email`='" . $email . "'");
        $data = $rs->fetch_assoc();

        if ($data["ver_status_id"] == 1) {
    ?>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 bg-primary " style="height: 100vh; width: 100%;">
                        <div class="row">


                            <div class="col-12" aria-hidden="true">
                                <div class="row">

                                    <div class="col-12 placeholder-glow p-0">
                                        <div class="placeholder bg-dark col-12" style="height: 45vh; width: 100%;">

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 text-center fw-bold" style="height: 0vh; width: 100%;">
                                <div class="row">

                                    <div class="col-12 bg-dark">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fs-1 bg-dark text-warning">Pending..... Your Account Is Not Verifyed.</label>
                                            </div>
                                            <div class="col-6 offset-3 mt-3 mb-3">
                                                <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped bg-info" style="width: 50%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-12" aria-hidden="true">
                                <div class="row">

                                    <div class="col-12 placeholder-glow p-0">
                                        <div class="placeholder bg-dark col-12" style="height: 55vh; width: 100%;">

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                        <?php
                    } else {

                        if ($data["blo_status_id"] == 1) {



                            if ($data["pay_status_id"] == 1) {

                        ?>


                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">




                                                <div class="modal" tabindex="-1" data-bs-backdrop="static" id="studentPaymentModal">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                                        <div class="modal-content bg-dark">
                                                            <div class="modal-header text-white">
                                                                <h5 class="modal-title">Student Payment</h5>
                                                            </div>
                                                            <div class="modal-body text-white">

                                                                <div class="col-12">
                                                                    <div class="row">

                                                                        <?php


                                                                        $prs = Database::search("SELECT * FROM `payment`");
                                                                        $pdata = $prs->fetch_assoc();

                                                                        ?>

                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <label class="form-label fs-4 mt-5">SL Academi Couse Fee :</label>
                                                                                <input type=" text" readonly class="form-control border-0 bg-dark text-white fs-5 mt-3 text-end" id="v" value="Rs.<?php echo $pdata["value"]; ?>.00" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <label class="form-label fs-4 mt-5">Discount :</label>
                                                                                <input type=" text" readonly class="form-control border-0 bg-dark text-white fs-5 mt-3 text-end" id="d" value="Rs.<?php echo $pdata["discount"]; ?>.00" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <label class="form-label fs-4 mt-5">Total Amount :</label>
                                                                                <div class="col-4 offset-8">
                                                                                    <hr class="border border-white border-2">
                                                                                </div>
                                                                                <input type=" text" readonly class="form-control border-0 bg-dark text-white fs-5 mt-3 text-end" id="t" value="Rs.<?php echo $pdata["value"] - $pdata["discount"]; ?>.00" />

                                                                                <div class="col-4 offset-8">
                                                                                    <hr class="border border-white border-2">
                                                                                    <hr class="border border-white border-2">
                                                                                </div>

                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-4 offset-8 d-grid">
                                                                            <button class="btn btn-success" type="submit" id="payhere-payment" onclick="payNow('<?php echo $data['id']; ?>');">PROCEED TO PAYMENT</button>
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



                            <?php

                            } else {



                            ?>

                                <div class="container-fluid">
                                    <div class="row">
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



                                                <div class="col-12 bg-dark">
                                                    <div class="row">

                                                        <div class="col-12 rounded mt-3 mb-3 dark-blue">
                                                            <div class="row">

                                                                <div class="d-none d-lg-block col-lg-3">
                                                                    <div class="row">
                                                                        <div class="col-12 mt-5">
                                                                            <div class="row">

                                                                                <div class="col-12">
                                                                                    <div class="row">
                                                                                        <div class="col-11 offset-1 mt-5">
                                                                                            <h2 class="fw-bold text-white text-decoration-underline cursor" onclick="window.location='studentPanel.php';">DashBoard</h2>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="col-12 col-lg-10 offset-0 offset-lg-1 mt-5 rounded mb-5 bg-secondary">

                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <div class="row">

                                                                                                <div class="col-12 d-grid mt-5 mb-5">
                                                                                                    <button class="btn btn-success fw-bold fs-4" onclick="window.location='downloadAssignment.php';">Download Assignment</button>
                                                                                                </div>
                                                                                                <div class="col-12 d-grid mt-3 mb-5">
                                                                                                    <button class="btn btn-primary fw-bold fs-4" onclick="window.location='viewLessonNote.php';">View Lesson Notes</button>
                                                                                                </div>
                                                                                                <div class="col-12 d-grid mt-3 mb-5">
                                                                                                    <button class="btn btn-danger fw-bold fs-4" onclick="window.location='uploadAnswer.php';">Upload Answer</button>
                                                                                                </div>
                                                                                                <div class="col-12 d-grid mt-3 mb-5">
                                                                                                    <button class="btn btn-warning fw-bold fs-4" onclick="window.location='studentProfile.php';">Profile</button>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>




                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="col-12 d-block d-lg-none">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="row">
                                                                                <div class="col-8 offset-sm-2">
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <div class="row">
                                                                                                <div class="col-12">
                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <nav class="navbar bg-body-tertiary">
                                                                                                                <div class="container-fluid">

                                                                                                                    <div class="dropdown">
                                                                                                                        <a class="navbar-brand  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                                            <i class="bi bi-list fs-1 text-white"></i>
                                                                                                                        </a>

                                                                                                                        <ul class="dropdown-menu">
                                                                                                                            <li><a class="dropdown-item" href="downloadAssignment.php">Download Assignment</a></li>
                                                                                                                            <li><a class="dropdown-item" href="viewLessonNote.php">View Lesson Notes</a></li>
                                                                                                                            <li><a class="dropdown-item" href="uploadAnswer.php">Upload Answer</a></li>
                                                                                                                            <li><a class="dropdown-item" href="studentProfile.php">Profile</a></li>
                                                                                                                        </ul>
                                                                                                                    </div>
                                                                                                                    <h2 class="fw-bold text-white cursor" onclick="window.location='studentPanel.php';">DashBoard</h2>
                                                                                                                </div>
                                                                                                            </nav>
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

                                                                <div class="col-12 col-lg-9 dark-purple">
                                                                    <div class="row">
                                                                        <div class="col-12 ">
                                                                            <div class="row">

                                                                                <div class="col-12 mb-5">
                                                                                    <div class="row">



                                                                                        <div class="col-12 ">
                                                                                            <div class="row">

                                                                                                <div class="col-12 fs-4 fw-bold text-white dark-blue text-center">Assignment Mark Sheet</div>

                                                                                                <div class="col-12 offset-0 mt-5 mb-5">
                                                                                                    <div class="row">


                                                                                                        <div class="col-12 mt-3 mb-5 text-white">
                                                                                                            <div class="row">
                                                                                                                <div class="col-1 offset-1 fs-6 fw-bold border-1 border-bottom border-white border-end">ID</div>
                                                                                                                <div class="col-3 col-lg-4 col-xl-2 fs-6 fw-bold border-1 border-bottom border-white border-end">Student Name</div>
                                                                                                                <div class="col-3 fs-6 fw-bold border-1 border-bottom border-white border-end d-none d-lg-none d-xl-block">Subject Name</div>
                                                                                                                <div class="col-3 col-xl-2 fs-6 fw-bold border-1 border-bottom border-white border-end">Assignment Name</div>
                                                                                                                <div class="col-2 d-none d-lg-none d-xl-block col-lg-1 fs-6 fw-bold border-1 border-bottom border-white border-end">Grade</div>
                                                                                                                <div class="col-2 col-lg-2 col-xl-1 fs-6 fw-bold border-1 border-bottom border-white border-end-0">Mark</div>

                                                                                                                <hr>

                                                                                                                <?php


                                                                                                                $srs = Database::search("SELECT * FROM `assignment_marks` INNER JOIN `student` ON assignment_marks.student_id=student.id INNER JOIN `subject` ON assignment_marks.subject_id=subject.id 
                                                                                    
                                                                                                                INNER JOIN `assignment` ON assignment_marks.assignment_id=assignment.id INNER JOIN `grade` ON assignment.grade_id=grade.id WHERE `rel_mark_status_id`='2' AND student.grade_id='" . $data["grade_id"] . "'");
                                                                                                                $snum = $srs->num_rows;

                                                                                                                for ($x = 1; $x <= $snum; $x++) {

                                                                                                                    $sdata = $srs->fetch_assoc();

                                                                                                                ?>

                                                                                                                    <div class="col-1 offset-1 fs-6  border-1 border-bottom border-white border-end">0<?php echo $x; ?></div>
                                                                                                                    <div class="col-3 col-lg-4 col-xl-2 fs-6  border-1 border-bottom border-white border-end"><?php echo $sdata["fname"] . " " . $sdata["lname"]; ?></div>
                                                                                                                    <div class="col-3 fs-6  border-1 border-bottom border-white border-end d-none d-lg-none d-xl-block"><?php echo $sdata["subject"]; ?></div>
                                                                                                                    <div class="col-3 col-xl-2 fs-6  border-1 border-bottom border-white border-end"><?php echo $sdata["assignment_name"]; ?></div>
                                                                                                                    <div class="col-2 d-none d-lg-none d-xl-block col-lg-1 fs-6  border-1 border-bottom border-white border-end"><?php echo $sdata["grade"]; ?></div>
                                                                                                                    <div class="col-2 col-lg-2 col-xl-1 fs-6  border-1 border-bottom border-white border-end-0"><?php echo $sdata["marks"]; ?></div>


                                                                                                                    <hr>

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
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php


                                        }
                                    } else {
                                            ?>

                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12 bg-primary " style="height: 100vh; width: 100%;">
                                                        <div class="row">


                                                            <div class="col-12" aria-hidden="true">
                                                                <div class="row">

                                                                    <div class="col-12 placeholder-glow p-0">
                                                                        <div class="placeholder bg-dark col-12" style="height: 45vh; width: 100%;">

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="col-12 text-center fw-bold" style="height: 0vh; width: 100%;">
                                                                <div class="row">

                                                                    <div class="col-12 bg-dark">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <label class="form-label fs-1 bg-dark text-warning">Your Account Has Been Blocked By Admin</label>
                                                                            </div>
                                                                            <div class="col-6 offset-3 mt-3 mb-3">
                                                                                <div class="spinner-grow text-light" role="status">
                                                                                    <span class="visually-hidden">Loading...</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>

                                                            <div class="col-12" aria-hidden="true">
                                                                <div class="row">

                                                                    <div class="col-12 placeholder-glow p-0">
                                                                        <div class="placeholder bg-dark col-12" style="height: 55vh; width: 100%;">

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>

                                            <?php
                                        }
                                    }
                                }



                                            ?>


                                            <script src="script.js"></script>
                                            <script src="bootstrap.bundle.js"></script>
                                            <script src="bootstrap.bundle.min.js"></script>
                                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                                            <script src="bootstrap.js"></script>
                                            <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>


</body>

</html>