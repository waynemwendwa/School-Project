<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
                        <h4 class="text-secondary">Login Here</h4>
                    </div>
                    <form action="handlelogin.php" method="post">
                        <div class="row mb-3">

                            <div class="col-md col-lg">
                                <input class="form-control rounded-pill" type="email" name="email" placeholder="eg waynematheka@gmail.com">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md col-lg">
                                <input class="form-control rounded-pill"  type="password" name="password" placeholder="Enter Password">
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md col-lg">
                                <input class="col-sm-12 btn btn-secondary rounded-pill" type="submit" name="login" value="login">
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="text-center text-secondary">
                            <a href="#">Forgot Password? Click here</a>
                        </div>
                        <div class="text-center">
                            <a href="account.php">Create an account? Click here</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
