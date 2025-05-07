<?php

session_start();
require "connection.php";


if (isset($_SESSION["academic_officer"])) {

    $email = $_SESSION["academic_officer"]["email"];

    $rs = Database::search("SELECT * FROM `academic_officer` WHERE `email`='" . $email . "'");
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
                                                                <h2 class="fw-bold text-white text-decoration-underline cursor" onclick="window.location='academicOfficerPanel.php';">DashBoard</h2>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-12 col-lg-10 offset-0 offset-lg-1 mt-5 rounded mb-5 bg-secondary">

                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="row">

                                                                    <div class="col-12 d-grid mt-5 mb-5">
                                                                        <button class="btn btn-success fw-bold fs-4" onclick="window.location='registerNewStudent.php';">Register New Student</button>
                                                                    </div>
                                                                    <div class="col-12 d-grid mt-3 mb-5">
                                                                        <button class="btn btn-primary fw-bold fs-4" onclick="window.location='viewAssignmentMarkSheet.php';">View Assignment Mark Sheets</button>
                                                                    </div>
                                                                    <div class="col-12 d-grid mt-3 mb-5">
                                                                        <button class="btn btn-danger fw-bold fs-4" onclick="window.location='releaseAssignmentMark.php';">Release Assignment Marks</button>
                                                                    </div>
                                                                    <div class="col-12 d-grid mt-3 mb-5">
                                                                        <button class="btn btn-warning fw-bold fs-4" onclick="window.location='academicOfficerProfile.php';">Profile</button>
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
                                                                                                <li><a class="dropdown-item" href="registerNewStudent.php">Register New Student</a></li>
                                                                                                <li><a class="dropdown-item" href="viewAssignmentMarkSheet.php">View Assignment Mark Sheets</a></li>
                                                                                                <li><a class="dropdown-item" href="releaseAssignmentMark.php">Release Assignment Marks</a></li>
                                                                                                <li><a class="dropdown-item" href="academicOfficerProfile.php">Profile</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <h2 class="fw-bold text-white" onclick="window.location='academicOfficerPanel.php';">DashBoard</h2>
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

                                                    <div class="col-12">
                                                        <div class="row">

                                                            <div class="col-12 fs-4 text-white text-center bg-dark">Register New Student</div>

                                                            <div class="col-12 col-lg-10 offset-lg-1 mt-5">
                                                                <div class="row">

                                                                    <div class="col-10 offset-1 col-lg-8 offset-lg-2 ">
                                                                        <div class="row">

                                                                            <div class="col-12 mt-5 mb-5">
                                                                                <div class="row">

                                                                                    <div class="col-6 mb-4">
                                                                                        <div class="row">
                                                                                            <div class="col-12 text-white">
                                                                                                <label class="form-label fw-bold">First Name</label>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <input type="text" class="form-control" id="fn">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6 mb-4">
                                                                                        <div class="row">
                                                                                            <div class="col-12 text-white">
                                                                                                <label class="form-label fw-bold">Last Name</label>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <input type="text" class="form-control" id="ln">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 mb-4">
                                                                                        <div class="row">
                                                                                            <div class="col-12 text-white">
                                                                                                <label class="form-label fw-bold">Email</label>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <input type="text" class="form-control" id="em">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6 mb-4">
                                                                                        <div class="row">
                                                                                            <div class="col-12 text-white">
                                                                                                <label class="form-label fw-bold">User Name</label>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <input type="text" class="form-control" id="un">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6 mb-4">
                                                                                        <div class="row">
                                                                                            <div class="col-12 text-white">
                                                                                                <label class="form-label fw-bold">Password</label>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <input type="text" class="form-control" id="pw">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6 mb-4">
                                                                                        <div class="row">
                                                                                            <div class="col-12 text-white">
                                                                                                <label class="form-label fw-bold">Mobile</label>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <input type="text" class="form-control" id="mo">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6 mb-4">
                                                                                        <div class="row">
                                                                                            <div class="col-12 text-white">
                                                                                                <label class="form-label fw-bold">Date Of Birth</label>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <input type="date" class="form-control" id="dob">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6 mb-4">
                                                                                        <div class="row">
                                                                                            <div class="col-12 text-white">
                                                                                                <label class="form-label fw-bold">Gender</label>
                                                                                            </div>
                                                                                            <div class="col-12">

                                                                                                <select name="gender" class="form-select" id="ge">

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
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6 mb-4">
                                                                                        <div class="row">
                                                                                            <div class="col-12 text-white">
                                                                                                <label class="form-label fw-bold">Grade</label>
                                                                                            </div>
                                                                                            <div class="col-12">

                                                                                                <select name="grade" class="form-select" id="gr">

                                                                                                    <?php

                                                                                                    $grade_rs = Database::search("SELECT * FROM `grade`");
                                                                                                    $grade_num = $grade_rs->num_rows;

                                                                                                    for ($x = 0; $x < $grade_num; $x++) {

                                                                                                        $grade_data = $grade_rs->fetch_assoc();

                                                                                                    ?>
                                                                                                        <option value="<?php echo $grade_data["id"]; ?>"><?php echo $grade_data["grade"]; ?></option>
                                                                                                    <?php
                                                                                                    }

                                                                                                    ?>


                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-6 offset-3 mb-3 mt-5">
                                                                                        <div class="row">
                                                                                            <div class="col-12 d-grid">
                                                                                                <button class="btn btn-outline-warning" onclick="registerNewStudent();">Register</button>
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