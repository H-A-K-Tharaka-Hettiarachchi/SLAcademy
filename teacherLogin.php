<?php

session_start();

require "connection.php";

$data;

if (isset($_SESSION["teacher"])) {

    $rs = Database::search("SELECT * FROM `teacher` WHERE `email`='" . $_SESSION["teacher"]["email"] . "'");
    $data = $rs->fetch_assoc();
} else {
    $data = "";
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


</head>

<body class="bg-primary">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">

                    <hr>
                    <div class="col-12 bg-info mb-5">
                        <div class="row">

                            <div class="title4 col-5 offset-3 text-center mb-3 mt-3 d-none d-lg-block">~SL Academi~</div>
                            <div class="col-4 col-lg-3 offset-lg-0 offset-4  mb-3 mt-3 ">

                                <img src="icon/academi_4096px.png" style="height: 100px;" class="rounded-circle bg-light ">

                            </div>
                        </div>
                    </div>
                    <hr>


                    <div class="col-12 col-lg-6 offset-lg-3 bg-body mt-5 mb-5 rounded shadow">
                        <div class="row">

                            <div class="col-12  bg-secondary">
                                <div class="row">

                                    <div class="col-12 mt-3 mb-3 text-center">
                                        <div class="row">
                                            <label class="form-label fs-4 fw-bold bg-info">Theacher Login</label>
                                        </div>
                                    </div>

                                    <div class="col-8 offset-2 mt-5 mb-5">
                                        <label class="form-label fw-bold">User Name</label>
                                        <?php

                                        if (isset($_SESSION["teacher"])) {
                                        ?>
                                            <input type="text" class="form-control" id="tun" value="<?php echo $data["user_name"]; ?>">
                                        <?php
                                        } else {
                                        ?>
                                            <input type="text" class="form-control" id="tun">
                                        <?php
                                        }


                                        ?>

                                    </div>

                                    <div class="col-8 offset-2 mt-5 mb-5">
                                        <label class="form-label fw-bold">Password</label>
                                        <?php

                                        if (isset($_SESSION["teacher"])) {
                                        ?>
                                            <input type="password" class="form-control" id="tp" value="<?php echo $data["password"]; ?>">
                                        <?php
                                        } else {
                                        ?>
                                            <input type="password" class="form-control" id="tp">
                                        <?php
                                        }


                                        ?>

                                    </div>

                                    <?php

                                    $trs = Database::search("SELECT * FROM `teacher` WHERE  `user_name`='" . $_SESSION["teacher"]["user_name"] . "' AND `password`='" . $_SESSION["teacher"]["password"] . "' ");
                                    $tdata = $trs->fetch_assoc();

                                    if ($tdata["ver_status_id"] == 1) {

                                    ?>

                                        <div class="col-8 offset-2  mb-5 d-grid">
                                            <button class="btn btn-primary" onclick="tVcsend();">Send Verification Code</button>
                                        </div>

                                        <div class="col-8 offset-2  mb-5">
                                            <label class="form-label fw-bold">Verification Code</label>
                                            <input type="password" class="form-control" id="tvc">
                                        </div>


                                        <div class="col-8 offset-2 mt-5 mb-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row">

                                                        <div class="col-4 offset-1 d-grid">
                                                            <button class="btn btn-success" onclick="tLogin();">Verify</button>
                                                        </div>
                                                        <div class="col-4 offset-1 d-grid">
                                                            <button class="btn btn-danger" onclick="window.location='index.php';">Back To Login Selection</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php

                                    } else {

                                    ?>


                                        <div class="col-8 offset-2 mt-5 mb-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row">

                                                        <div class="col-4 offset-1 d-grid">
                                                            <button class="btn btn-success" onclick="tLogin2();">Log In</button>
                                                        </div>
                                                        <div class="col-4 offset-1 d-grid">
                                                            <button class="btn btn-danger" onclick="window.location='index.php';">Back To Login Selection</button>
                                                        </div>

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

                    <div class="col-12 text-center fw-bold fs-5">&copy; ~KSHPRIME~Inc All Right Reserved</div>

                </div>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>


</body>

</html>