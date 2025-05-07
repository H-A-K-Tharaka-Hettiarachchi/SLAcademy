<?php

session_start();
require "connection.php";

if (isset($_SESSION["teacher"])) {

    $email = $_SESSION["teacher"]["email"];

    $rs = Database::search("SELECT * FROM `teacher` WHERE `email`='" . $email . "'");
    $data = $rs->fetch_assoc();

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

        <?php

        $data;

        if (isset($_SESSION["teacher"])) {

            $email = $_SESSION["teacher"]["email"];

            $rs = Database::search("SELECT * FROM `teacher` WHERE `email`='" . $email . "'");
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
                                                                                            <h2 class="fw-bold text-white text-decoration-underline cursor" onclick="window.location='teacherPanel.php';">DashBoard</h2>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="col-10 offset-1 mt-5 rounded mb-5 bg-secondary">

                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <div class="row">

                                                                                                <div class="col-12 d-grid mt-5 mb-5">
                                                                                                    <button class="btn btn-dark fw-bold fs-4" onclick="window.location='addLessonNote.php';">Add Lesson Note</button>
                                                                                                </div>

                                                                                                <div class="col-12 d-grid mt-3 mb-5">
                                                                                                    <button class="btn btn-success fw-bold fs-4" onclick="window.location='addNewAssignment.php';">Add New Assignments</button>
                                                                                                </div>
                                                                                                <div class="col-12 d-grid mt-3 mb-5">
                                                                                                    <button class="btn btn-primary fw-bold fs-4" onclick="window.location='viewSubmittedAnswerSheets.php';">View Submitted Answer Sheets</button>
                                                                                                </div>
                                                                                                <div class="col-12 d-grid mt-3 mb-5">
                                                                                                    <button class="btn btn-danger fw-bold fs-4" onclick="window.location='addAssignmentMarks.php';">Add Assignment Marks</button>
                                                                                                </div>
                                                                                                <div class="col-12 d-grid mt-3 mb-5">
                                                                                                    <button class="btn btn-warning fw-bold fs-4" onclick="window.location='teacherProfile.php';">Profile</button>
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
                                                                                                                            <li><a class="dropdown-item" href="addLessonNote.php">Add Lesson Note</a></li>
                                                                                                                            <li><a class="dropdown-item" href="addNewAssignment.php">Add New Assignments</a></li>
                                                                                                                            <li><a class="dropdown-item" href="viewSubmittedAnswerSheets.php">View Submitted Answer Sheets</a></li>
                                                                                                                            <li><a class="dropdown-item" href="addAssignmentMarks.php">Add Assignment Marks</a></li>
                                                                                                                            <li><a class="dropdown-item" href="teacherProfile.php">Profile</a></li>
                                                                                                                        </ul>
                                                                                                                    </div>
                                                                                                                    <h2 class="fw-bold text-white cursor" onclick="window.location='teacherPanel.php';">DashBoard</h2>
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

                                                                <div class="col-12 col-lg-9 bg-info">
                                                                    <div class="row">
                                                                        <div class="col-12 dark-purple">
                                                                            <div class="row">

                                                                                <div class="col-12 mt-5 mb-5">
                                                                                    <div class="row">
                                                                                        <div class="col-6 offset-2"><input type="text" class="form-control"></div>
                                                                                        <div class="col-2 offset-1"><button class="btn btn-primary">Search</button></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12 mt-3">
                                                                            <div class="row">


                                                                                <div class="col-12 mt-5">
                                                                                    <div class="row">






                                                                                        <div class="col-12 col-lg-6 mt-5">
                                                                                            <div class="row">

                                                                                                <div class="col-lg-11 offset-0 col-12 fs-3 fw-bold text-white dark-blue text-center">Lesson Notes</div>

                                                                                                <div class="col-12">
                                                                                                    <div class="row">

                                                                                                        <div class="col-lg-11 offset-0 col-12 bg-secondary mt-3 mb-3">
                                                                                                            <div class="row">
                                                                                                                <div class="col-1  fw-bold text-center mt-0 text-white fs-5">
                                                                                                                    ID
                                                                                                                </div>
                                                                                                                <div class="col-4 offset-1 fw-bold text-center mt-0 text-white fs-5">
                                                                                                                    Subject
                                                                                                                </div>
                                                                                                                <div class="col-4  fw-bold text-center mt-0 text-white fs-5">
                                                                                                                    Lesson Name
                                                                                                                </div>

                                                                                                                <div class="col-2  fw-bold text-center mt-0 text-white fs-5">
                                                                                                                    Grade
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <?php


                                                                                                        $lnrs = Database::search("SELECT * FROM `lesson_note` INNER JOIN `subject` ON lesson_note.subject_id=subject.id 
                                                                                                        INNER JOIN `grade` ON lesson_note.grade_id=grade.id   WHERE `teacher_email`='" . $email . "'");
                                                                                                        $lnnum = $lnrs->num_rows;

                                                                                                        for ($x = 1; $x <= $lnnum; $x++) {


                                                                                                            $lndata = $lnrs->fetch_assoc();

                                                                                                        ?>

                                                                                                            <div class="col-lg-11 offset-0 col-12 bg-secondary mb-3 mt-4" style="height: 60px;">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-1   text-center ">
                                                                                                                        <label class=" mt-3 text-white ">0<?php echo ($x); ?></label>
                                                                                                                    </div>
                                                                                                                    <div class="col-4 offset-1 text-center">
                                                                                                                        <label class="form-label   mt-3 text-white "><?php echo $lndata["subject"]; ?></label>
                                                                                                                    </div>
                                                                                                                    <div class="col-4 text-center">
                                                                                                                        <label class="  mt-3 text-white "><?php echo $lndata["lesson_name"]; ?></label>
                                                                                                                    </div>

                                                                                                                    <div class="col-2  text-center">
                                                                                                                        <label class="  mt-3 text-white "><?php echo $lndata["grade"]; ?></label>
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





                                                                                        <div class="col-12 col-lg-6 mt-5">
                                                                                            <div class="row">

                                                                                                <div class="col-12 col-lg-12 offset-0 offset-lg-0 fs-3 fw-bold text-white dark-blue text-center">Assignment</div>

                                                                                                <div class="col-12">
                                                                                                    <div class="row">

                                                                                                        <div class="col-12 col-lg-12 offset-0 offset-lg-0 bg-secondary mt-3 mb-3">
                                                                                                            <div class="row">
                                                                                                                <div class="col-1  fw-bold text-center mt-0 text-white fs-5">
                                                                                                                    ID
                                                                                                                </div>
                                                                                                                <div class="col-5 offset-0 fw-bold text-center mt-0 text-white fs-5">
                                                                                                                    Subject
                                                                                                                </div>
                                                                                                                <div class="col-4  fw-bold text-center mt-0 text-white fs-5">
                                                                                                                    Assignment Name
                                                                                                                </div>

                                                                                                                <div class="col-2 fw-bold text-center mt-0 text-white fs-5">
                                                                                                                    Grade
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <?php


                                                                                                        $asrs = Database::search("SELECT * FROM `assignment` INNER JOIN `subject` ON assignment.subject_id=subject.id 
                                                                                                                               INNER JOIN `grade` ON assignment.grade_id=grade.id   WHERE `teacher_email`='" . $email . "'");
                                                                                                        $asnum = $asrs->num_rows;

                                                                                                        for ($y = 1; $y <= $asnum; $y++) {


                                                                                                            $asdata = $asrs->fetch_assoc();

                                                                                                        ?>

                                                                                                            <div class="col-12 col-lg-12 offset-0 offset-lg-0 bg-secondary mb-3 mt-4" style="height: 60px;">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-1   text-center ">
                                                                                                                        <label class="mt-3 text-white ">0<?php echo ($y); ?></label>
                                                                                                                    </div>
                                                                                                                    <div class="col-5 offset- text-center">
                                                                                                                        <label class="form-label  mt-3 text-white "><?php echo $asdata["subject"]; ?></label>
                                                                                                                    </div>
                                                                                                                    <div class="col-4 text-center">
                                                                                                                        <label class=" mt-3 text-white "><?php echo $asdata["assignment_name"]; ?></label>
                                                                                                                    </div>

                                                                                                                    <div class="col-2  text-center">
                                                                                                                        <label class="  mt-3 text-white "><?php echo $asdata["grade"]; ?></label>
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

    </body>

    </html>


<?php
} else {

    header('Location: ' . 'index.php');
}

?>