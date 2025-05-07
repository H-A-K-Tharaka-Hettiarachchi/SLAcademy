<?php

require "connection.php";

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


                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 title3 bg-info text-center">Academic Officer Registration</div>
                        </div>
                    </div>


                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-8 offset-2">
                                <div class="row">
                                    <div class="col-12  bg-gradient rounded">
                                        <div class="row">

                                            <div class="col-12 ">
                                                <div class="row">



                                                    <div class="col-12 mt-5">
                                                        <div class="row">

                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <label class="form-label fw-bold">First Name</label>
                                                                        <input type="text" class="form-control" id="f">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <label class="form-label fw-bold">Last Name</label>
                                                                        <input type="text" class="form-control" id="l">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="col-12 mt-3">
                                                        <div class="row">

                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <label class="form-label fw-bold">Mobile</label>
                                                                        <input type="text" class="form-control" id="m">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <label class="form-label fw-bold">Gender</label>
                                                                        <select name="gender" id="g" class="form-select">

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

                                                        </div>
                                                    </div>



                                                    <div class="col-12 mt-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="form-label fw-bold">Email</label>
                                                                <input type="text" class="form-control" id="e">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mt-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="form-label fw-bold">NIC</label>
                                                                <input type="text" class="form-control" id="n">
                                                            </div>
                                                        </div>
                                                    </div>






                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-6 offset-3 mt-5">
                                                                <div class="row">
                                                                    <div class="col-12 d-grid">
                                                                        <button class="btn btn-success" onclick="aoRegister();">Register</button>
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