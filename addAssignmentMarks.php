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


                                                    <div class="col-12 mt-5 mb-5">
                                                        <div class="row">
                                                            <div class="col-6 offset-3 mt-5 mb-5 rounded dark-brown">
                                                                <div class="row">

                                                                    <div class=" col-12">
                                                                        <div class="row">

                                                                            <div class="col-12">
                                                                                <div class="row">

                                                                                    <div class="col-12  text-white fw-bold mt-5 mb-3">
                                                                                        <label class="form-label fs-3">Add Assignment Marks</label>
                                                                                    </div>

                                                                                    <div class="col-10 offset-1">
                                                                                        <div class="row">
                                                                                            <div class="col-12 text-white fw-bold mt-5">
                                                                                                <label class="form-label">Marks</label>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <input type="text" class="form-control" id="mrk">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-10 offset-1">
                                                                                        <div class="row">
                                                                                            <div class="col-12 text-white fw-bold mt-5">
                                                                                                <label class="form-label">Student Name</label>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <select name="gender" class="form-select" id="st">
                                                                                                    <option value="0">Select Student</option>
                                                                                                    <?php

                                                                                                    $student_rs = Database::search("SELECT * FROM `student`");
                                                                                                    $student_num = $student_rs->num_rows;

                                                                                                    for ($x = 0; $x < $student_num; $x++) {

                                                                                                        $student_data = $student_rs->fetch_assoc();

                                                                                                    ?>
                                                                                                        <option value="<?php echo $student_data["id"]; ?>">0<?php echo $student_data["id"] . " - " . $student_data["fname"] . " " . $student_data["lname"];  ?></option>
                                                                                                    <?php
                                                                                                    }

                                                                                                    ?>


                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-10 offset-1">
                                                                                        <div class="row">
                                                                                            <div class="col-12 text-white fw-bold mt-5">
                                                                                                <label class="form-label">Subject Name</label>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <select name="gender" class="form-select" id="sb">
                                                                                                    <option value="0">Select Subject</option>
                                                                                                    <?php

                                                                                                    $subject_rs = Database::search("SELECT * FROM `subject`");
                                                                                                    $subject_num = $subject_rs->num_rows;

                                                                                                    for ($x = 0; $x < $subject_num; $x++) {

                                                                                                        $subject_data = $subject_rs->fetch_assoc();

                                                                                                    ?>
                                                                                                        <option value="<?php echo $subject_data["id"]; ?>"><?php echo $subject_data["subject"]; ?></option>
                                                                                                    <?php
                                                                                                    }

                                                                                                    ?>


                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-10 offset-1">
                                                                                        <div class="row">
                                                                                            <div class="col-12 text-white fw-bold mt-5">
                                                                                                <label class="form-label">Assignment Name</label>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <select name="gender" class="form-select" id="an">
                                                                                                    <option value="0">Select Assignment</option>
                                                                                                    <?php

                                                                                                    $assignment_rs = Database::search("SELECT * FROM `assignment`");
                                                                                                    $assignment_num = $assignment_rs->num_rows;

                                                                                                    for ($x = 0; $x < $assignment_num; $x++) {

                                                                                                        $assignment_data = $assignment_rs->fetch_assoc();

                                                                                                    ?>
                                                                                                        <option value="<?php echo $assignment_data["id"]; ?>"><?php echo $assignment_data["assignment_name"]; ?></option>
                                                                                                    <?php
                                                                                                    }

                                                                                                    ?>


                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-10 offset-1">
                                                                                        <div class="row">
                                                                                            <div class="col-12 text-white fw-bold mt-5">
                                                                                                <label class="form-label">Answer Sheet</label>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <select name="gender" class="form-select" id="as">
                                                                                                    <option value="0">Select Answer Sheet</option>
                                                                                                    <?php

                                                                                                    $student_has_answer_sheet_rs = Database::search("SELECT student.id,student.fname,student.lname,student.email,assignment_answer_sheets.id AS `answer_sheet_id`,
                                                                                                    assignment_answer_sheets.path,assignment_answer_sheets.student_id,assignment_answer_sheets.assignment_id 
                                                                                                    FROM `student` INNER JOIN assignment_answer_sheets ON student.id=assignment_answer_sheets.student_id;");
                                                                                                    $student_has_answer_sheet_num = $student_has_answer_sheet_rs->num_rows;

                                                                                                    for ($x = 0; $x < $student_has_answer_sheet_num; $x++) {

                                                                                                        $student_has_answer_sheet_data = $student_has_answer_sheet_rs->fetch_assoc();

                                                                                                    ?>
                                                                                                        <option value="<?php echo $student_has_answer_sheet_data["answer_sheet_id"]; ?>">0<?php echo $student_has_answer_sheet_data["answer_sheet_id"] . "_" . $student_has_answer_sheet_data["fname"] . " " . $student_has_answer_sheet_data["lname"]; ?></option>
                                                                                                    <?php
                                                                                                    }

                                                                                                    ?>


                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>



                                                                                    <div class="col-10 offset-1 mb-5 mt-5">
                                                                                        <div class="row">
                                                                                            <div class="col-12">
                                                                                                <div class="row">
                                                                                                    <div class="col-6 offset-3">
                                                                                                        <div class="row">
                                                                                                            <div class="col-12 d-grid">
                                                                                                                <button class="btn btn-success fs-5" onclick="addAssignmentMark();">Submite</button>
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