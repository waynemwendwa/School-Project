<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
</head>
<body class="bg-secondary">
<div class="container p-4">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <h3 class="text-secondary text-center">Welcome to Golden Wall School Administration System</h3>
                <div class="col-md-5 col-lg-5">
                    <img src="images/library.jpg" class="rounded-circle" alt="loading" width="400" height="400">
                </div>
                <div class="col-md-7 col-lg-7">
                    <div class="text-center">
                        <h4 class="text-secondary">Create an account</h4>
                        <form action="handleaccount.php" method="post">
                            <div class="row mb-3">
                                <div class="col-sm-6 col-lg-6">
                                    <input class="form-control rounded-pill" type="text" name="fname"
                                           placeholder="Enter first name" required>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <input class="form-control rounded-pill" type="text" name="sname"
                                           placeholder="Enter other name" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md col-lg">
                                    <input class="form-control rounded-pill" type="email" name="email"
                                           placeholder="eg waynematheka@gmail.com" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-6 col-lg-6">
                                    <input class="form-control rounded-pill" type="password" name="password"
                                           placeholder="Enter Password" required>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <input class="form-control rounded-pill" type="password" name="cpassword"
                                           placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md col-lg">
                                    <input class="col-sm-12 btn btn-secondary rounded-pill" type="submit" name="Register"
                                           value="Register">
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="text-center">
                                <a href="#">Forgot Password? Click here</a>
                            </div>
                            <div class="text-center">
                                <a href="login.php">Already have an account? Login here</a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

