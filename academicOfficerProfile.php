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
                                                                                            <label for="image" onclick="changeAOImage();">

                                                                                                <?php

                                                                                                $aors = Database::search("SELECT * FROM `academic_officer`");
                                                                                                $aodata = $aors->fetch_assoc();

                                                                                                if (empty($aodata["image"])) {
                                                                                                ?>
                                                                                                    <img src="icon/user_icon.png" class="rounded-circle" style="width: 150px; height: 150px;" id="img">
                                                                                                <?php
                                                                                                } else {
                                                                                                ?>
                                                                                                    <img src="<?php echo $aodata["image"]; ?>" class="rounded-circle" style="width: 150px; height: 150px;" id="img">
                                                                                                <?php
                                                                                                }

                                                                                                ?>


                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 text-center">
                                                                                        <label class="form-label  text-white mt-3 mb-3"><?php echo $aodata["fname"] . " " . $aodata["lname"]; ?></label>
                                                                                    </div>
                                                                                    <div class="col-6 offset-3 mb-3 mt-3 d-grid">
                                                                                        <button class=" btn btn-warning" onclick="uploadAOImage('<?php echo $aodata['email']; ?>');">Upload Image</button>
                                                                                    </div>

                                                                                    <div class="col-4 offset-4 mb-3 mt-5 d-grid">
                                                                                        <button class=" btn btn-danger" onclick="academicOfficerLogout();">Log Out</button>
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
                                                                                        <input type="text " class="form-control" value="<?php echo $aodata["fname"]; ?>" id="f">
                                                                                    </div>

                                                                                    <div class="col-12 text-start mb-3">
                                                                                        <label class="form-label fw-bold text-white ">Last Name</label>
                                                                                        <input type="text" class="form-control" value="<?php echo $aodata["lname"]; ?>" id="l">
                                                                                    </div>
                                                                                    <div class="col-12 text-start mb-3">
                                                                                        <label class="form-label fw-bold text-white ">NIC</label>
                                                                                        <input type="text" class="form-control" value="<?php echo $aodata["nic"]; ?>" id="n">
                                                                                    </div>
                                                                                    <div class="col-12 text-start mb-3">
                                                                                        <label class="form-label fw-bold text-white ">Mobile</label>
                                                                                        <input type="text" class="form-control" value="<?php echo $aodata["mobile"]; ?>" id="m">
                                                                                    </div>
                                                                                    <div class="col-12 text-start mb-3">
                                                                                        <label class="form-label fw-bold text-white">Address</label>
                                                                                        <input type="text" class="form-control" value="<?php echo $aodata["address"]; ?>" id="a">
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
                                                                                        <button class="btn btn-success" onclick="updateAcademicOfficerProfile('<?php echo $aodata['email']; ?>');">Update Profile</button>
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