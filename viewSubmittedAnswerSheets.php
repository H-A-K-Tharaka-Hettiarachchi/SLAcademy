<?php

session_start();

require "connection.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">

    <title>SL_Academi</title>

    <link rel="icon" href="icon/academi_4096px.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


</head>

<body class="bg-primary">


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
                                                                                        <h2 class="fw-bold text-white" onclick="window.location='teacherPanel.php';">DashBoard</h2>
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
                                            <div class="col-12 mt-5 mb-5">
                                                <div class="row">



                                                    <div class="col-12 offset-0">
                                                        <div class="row">

                                                            <div class="col-12 fs-4 fw-bold text-white dark-blue text-center">Submitted Answer Sheets</div>

                                                            <div class="col-12 offset-0 mt-5 mb-5">
                                                                <div class="row">


                                                                    <div class="col-12 mt-3 mb-5 text-white">
                                                                        <div class="row">
                                                                            <div class="col-1 fs-6 fw-bold border-1 border-bottom border-white border-end">ID</div>
                                                                            <div class="col-4 col-lg-4 col-xl-3 fs-6 fw-bold border-1 border-bottom border-white border-end">Student Name</div>
                                                                            <div class="col-3 fs-6 fw-bold border-1 border-bottom border-white border-end d-none d-lg-none d-xl-block">Subject Name</div>
                                                                            <div class="col-3 col-xl-2 fs-6 fw-bold border-1 border-bottom border-white border-end">Assignment Name</div>
                                                                            <div class="col-2 fs-6 fw-bold border-1 border-bottom border-white border-end">Grade</div>
                                                                            <div class="col-2 col6lg-2 col-xl-1 border-1 border-bottom border-white"></div>
                                                                            <hr>

                                                                            <?php

                                                                            $rs = Database::search("SELECT * FROM `assignment_answer_sheets`");
                                                                            $num = $rs->num_rows;


                                                                            for ($x = 1; $x <= $num; $x++) {

                                                                                $data = $rs->fetch_assoc();

                                                                                $strs = Database::search("SELECT * FROM `student` WHERE `id` ='" . $data["student_id"] . "'");

                                                                                $ars = Database::search("SELECT * FROM `assignment` INNER JOIN `subject` ON assignment.subject_id=subject.id 
                                                                                    
                                                                                INNER JOIN `grade` ON assignment.grade_id=grade.id WHERE `assignment`.id ='" . $data["assignment_id"] . "'");



                                                                                $stdata = $strs->fetch_assoc();

                                                                                $adata = $ars->fetch_assoc();

                                                                            ?>
                                                                                <div class="col-1 fs-6 fw-bold border-1 border-bottom border-white border-end">0<?php echo $data["id"]; ?></div>
                                                                                <div class="col-4 col-lg-4 col-xl-3 fs-6 fw-bold border-1 border-bottom border-white border-end"><?php echo $stdata["fname"] . " " . $stdata["lname"]; ?></div>
                                                                                <div class="col-3 fs-6 fw-bold border-1 border-bottom border-white border-end d-none d-lg-none d-xl-block"><?php echo $adata["subject"]; ?></div>
                                                                                <div class="col-3 col-xl-2 fs-6 fw-bold border-1 border-bottom border-white border-end"><?php echo $adata["assignment_name"]; ?></div>
                                                                                <div class="col-2 fs-6 fw-bold border-1 border-bottom border-white border-end"><?php echo $adata["grade"]; ?></div>
                                                                                <div class="col-2 col-lg-2 col-xl-1 border-1 border-bottom border-white d-grid">
                                                                                    <div class="row">
                                                                                        <div class="col-12 d-grid">
                                                                                            <div class="row">
                                                                                                <a headers_sent href="<?php echo $data['path']; ?>" target="_blank" class="btn fs-5 badge rounded-pill text-bg-danger">View</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
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




        </div>
    </div>
    </div>
    </div>


    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="bootstrap.js"></script>

</body>

</html>