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

    <?php

    $data;

    if (isset($_SESSION["academic_officer"])) {

        $email = $_SESSION["academic_officer"]["email"];

        $rs = Database::search("SELECT * FROM `academic_officer` WHERE `email`='" . $email . "'");
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
                                                                    <div class="col-12 ">
                                                                        <div class="row">

                                                                            <div class="col-12 mt-5 mb-4">
                                                                                <div class="row">
                                                                                    <div class="col-6 offset-2"><input type="text" class="form-control"></div>
                                                                                    <div class="col-2 offset-1"><button class="btn btn-primary">Search</button></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 mt-3 mb-5">
                                                                        <div class="row">

                                                                            <div class="col-12 mb-5">
                                                                                <div class="row">



                                                                                    <div class="col-12 mb-5">
                                                                                        <div class="row">

                                                                                            <div class=" col-12 fs-3 fw-bold text-white dark-blue text-center">Students</div>

                                                                                            <div class="col-12 text-white">
                                                                                                <div class="row">

                                                                                                    <div class="col-12 mt-5">
                                                                                                        <div class="row">

                                                                                                            <div class="col-1 offset-lg-1 fw-bold border-1 border-bottom border-white border-end">ID</div>
                                                                                                            <div class="col-3 col-lg-2 col-xl-2  fw-bold border-1 border-bottom border-white border-end">Name</div>
                                                                                                            <div class="col-3 fw-bold border-1 border-bottom border-white border-end d-none d-lg-none d-xl-block">Email</div>
                                                                                                            <div class="col-2 fw-bold border-1 border-bottom border-white border-end">Pay/Not Payed</div>
                                                                                                            <div class="col-2 col-xl-1 fw-bold border-1 border-bottom border-white border-end">Confirm</div>
                                                                                                            <div class="col-2 col-xl-1 fw-bold border-1 border-bottom border-end border-white">Status</div>
                                                                                                            <div class="col-2 col-lg-2 col-xl-1 border-1 border-bottom border-white"></div>


                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-12 mt-4">
                                                                                                        <div class="row">


                                                                                                            <?php

                                                                                                            $strs = Database::search("SELECT * FROM `student` INNER JOIN `pay_status` ON student.pay_status_id=pay_status.id");
                                                                                                            $stnum = $strs->num_rows;

                                                                                                            for ($y = 1; $y <= $stnum; $y++) {

                                                                                                                $stdata = $strs->fetch_assoc();

                                                                                                            ?>

                                                                                                                <div class="col-1 offset-lg-1 border-1 border-bottom border-white border-end">0<?php echo $y; ?></div>
                                                                                                                <div class="col-3 col-lg-2 col-xl-2 border-1 border-bottom border-white border-end"><?php echo $stdata["fname"] . " " . $stdata["lname"]; ?></div>
                                                                                                                <div class="col-3 d-none d-lg-none d-xl-block border-1 border-bottom border-white border-end"><?php echo $stdata["email"]; ?></div>
                                                                                                                <div class="col-2 border-1 border-bottom border-white border-end"><label class="form-label mt-1 mb-1"><?php echo $stdata["pay_status"]; ?></label></div>

                                                                                                                <?php


                                                                                                                $inv_status = $stdata["inv_status_id"];
                                                                                                                $ver_status = $stdata["ver_status_id"];
                                                                                                                $blo_status = $stdata["blo_status_id"];
                                                                                                                $pay_status = $stdata["pay_status_id"];



                                                                                                                if ($inv_status == 1) {
                                                                                                                ?>
                                                                                                                    <div class="col-2 col-xl-1 border-1 border-bottom border-white border-end"><button class="btn btn-success mt-1 mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="stInvite('<?php echo $stdata['email']; ?> ');">Invite</button></div>


                                                                                                                <?php
                                                                                                                } else if ($inv_status == 2 && $ver_status == 1) {
                                                                                                                ?>
                                                                                                                    <div class="col-2 col-xl-1 border-1 border-bottom border-white border-end"><button class="btn btn-success mt-1 mb-1 " data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="stInvite('<?php echo $stdata['email']; ?> ');">Re-Invite</button></div>
                                                                                                                <?php
                                                                                                                } else if ($inv_status == 2 && $ver_status == 2) {
                                                                                                                ?>
                                                                                                                    <div class="col-2 col-xl-1 border-1 border-bottom border-white border-end"><button class="btn btn-success mt-1 mb-1 disabled">Invited</button></div>
                                                                                                                <?php
                                                                                                                }
                                                                                                                if ($inv_status == 1 && $ver_status == 1) {
                                                                                                                ?>
                                                                                                                    <div class="col-2 col-xl-1 border-1 border-bottom border-white border-end"><button class="btn btn-warning mt-1 mb-1 disabled">Verify</button></div>

                                                                                                                <?php
                                                                                                                } else if ($inv_status == 2 && $ver_status == 1) {

                                                                                                                ?>
                                                                                                                    <div class="col-2 col-xl-1 border-1 border-bottom border-white border-end"><button class="btn btn-warning mt-1 mb-1" onclick="stVerify('<?php echo $stdata['email']; ?>');">Verify</button></div>

                                                                                                                <?php

                                                                                                                } else if ($inv_status == 2 && $ver_status == 2) {
                                                                                                                ?>
                                                                                                                    <div class="col-2 col-xl-1 border-1 border-bottom border-white border-end"><button class="btn btn-warning mt-1 mb-1 disabled">Verifyed</button></div>

                                                                                                                <?php
                                                                                                                }

                                                                                                                if ($ver_status == 1) {
                                                                                                                ?>
                                                                                                                    <div class="col-2 col-lg-2 col-xl-1 border-1 border-bottom border-white"> <button class=" btn btn-danger mt-1 mb-1 disabled">Block</button></div>
                                                                                                                <?php
                                                                                                                } else if ($ver_status == 2 && $blo_status == 1) {
                                                                                                                ?>
                                                                                                                    <div class="col-2 col-lg-2 col-xl-1 border-1 border-bottom border-white"> <button class=" btn btn-danger mt-1 mb-1" onclick="stBlockUnblock('<?php echo $stdata['email']; ?>');" id="stblock">Block</button></div>

                                                                                                                <?php
                                                                                                                } else if ($ver_status == 2 && $blo_status == 2) {
                                                                                                                ?>
                                                                                                                    <div class="col-2 col-lg-2 col-xl-1 border-1 border-bottom border-white"> <button class=" btn btn-danger mt-1 mb-1 " onclick="stBlockUnblock('<?php echo $stdata['email']; ?>');" id="stblock">UnBlock</button></div>

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
                                                                                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Student Invitation</h1>
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
                                                                                                                                                        <input type="text" class="form-control" id="stun">
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="col-11 offset-0 mt-3">
                                                                                                                                                <div class="row">
                                                                                                                                                    <div class="col-12 text-start">
                                                                                                                                                        <label class="form-label text-white fw-bold">Password</label>
                                                                                                                                                        <input type="password" class="form-control" id="stpw">
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>

                                                                                                                                        </div>

                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="modal-footer">
                                                                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cansel</button>
                                                                                                                                <button type="button" class="btn btn-primary" onclick="sentStudentInvitation();">Send</button>
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