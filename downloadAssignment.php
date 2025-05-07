<?php

session_start();
require "connection.php";


if (isset($_SESSION["student"])) {

    $email = $_SESSION["student"]["email"];

    $rs = Database::search("SELECT * FROM `student` WHERE `email`='" . $email . "'");
    $data = $rs->fetch_assoc();
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




    <?php
    $data;

    if (isset($_SESSION["student"])) {

        $email = $_SESSION["student"]["email"];

        $rs = Database::search("SELECT * FROM `student` WHERE `email`='" . $email . "'");
        $data = $rs->fetch_assoc();





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
                                                                                                <h2 class="fw-bold text-white" onclick="window.location='studentPanel.php';">DashBoard</h2>
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

                                                            <div class="col-12 fs-4 fw-bold text-white dark-blue text-center">Lesson Notes</div>

                                                            <div class="col-12 offset-0 mt-5 mb-5">
                                                                <div class="row">


                                                                    <div class="col-12 mt-3 mb-5 text-white">
                                                                        <div class="row">

                                                                            <div class="col-1 offset-0 offset-lg-1 fs-6 fw-bold border-1 border-bottom border-white border-end">ID</div>
                                                                            <div class="col-4 col-lg-4 col-xl-4 fs-6 fw-bold border-1 border-bottom border-white border-end">Assignment Name</div>
                                                                            <div class="col-5 col-lg-4  col-xl-4 fs-6 fw-bold border-1 border-bottom border-white border-end  ">Subject Name</div>
                                                                            <div class="col-2 col-lg-1 d-none d-lg-none d-xl-block  fs-6 fw-bold border-1 border-bottom border-white border-end">Grade</div>
                                                                            <div class="col-2 col-lg-2 col-xl-1 border-1 border-bottom border-white"></div>


                                                                            <hr class="col-12 offset-0 col-lg-11 offset-lg-1">


                                                                            <?php

                                                                            $lrs = Database::search("SELECT * FROM `student` INNER JOIN `assignment` ON student.grade_id =assignment.grade_id INNER JOIN `subject` ON
                                                                                    assignment.subject_id=subject.id INNER JOIN `grade` ON student.grade_id=grade.id WHERE student.grade_id='" . $data["grade_id"] . "' ");

                                                                            $lnum = $lrs->num_rows;


                                                                            for ($x = 1; $x <= $lnum; $x++) {

                                                                                $ldata = $lrs->fetch_assoc();

                                                                            ?>


                                                                                <div class="col-1 offset-0 offset-lg-1  border-1 border-bottom border-white border-end ">0<?php echo $x; ?></div>
                                                                                <div class="col-4 col-lg-4 col-xl-4 border-1 border-bottom border-white border-end"><?php echo $ldata["assignment_name"]; ?></div>
                                                                                <div class="col-5  col-lg-4 col-xl-4 border-1 border-bottom border-white border-end  "><?php echo $ldata["subject"]; ?></div>
                                                                                <div class="col-2 col-lg-1 d-none d-lg-none d-xl-block  border-1 border-bottom border-white border-end"><?php echo $ldata["grade"]; ?></div>
                                                                                <div class="col-2 col-lg-2 col-xl-1 border-1 border-bottom border-white">
                                                                                    <div class="col-12">
                                                                                        <div class="row">
                                                                                            <div class="col-12 d-grid">
                                                                                                <a download="<?php echo $ldata["path"]; ?>" href="<?php echo $ldata["path"]; ?>" target="_blank" class="btn btn-success badge">Download</a>
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


                                ?>



                                <script src="script.js"></script>
                                <script src="bootstrap.bundle.js"></script>
                                <script src="bootstrap.bundle.min.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                                <script src="bootstrap.js"></script>


</body>

</html>