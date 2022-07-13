<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-3 bg-secondary">
            <ul class="nav flex-column navsep">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="fa fa-folder-open fa-3x text-white"></i>
                        <span class="h4 text-white">GOLDEN WALL SCHOOL ADMINISTRATION SYSTEM</span>
                    </a>
                </li>
                <hr class="bg-white">
                <li class="nav-item navsep">
                    <a class="nav-link" href="Dashboard.php">
                        <i class="fa fa-home fa-2x text-white"></i>
                        <span class="text-white h5">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item navsep">
                    <a class="nav-link" href="students.php">
                        <i class="fa fa-users fa-2x text-white"></i>
                        <span class="text-white h5">New Users</span>
                    </a>
                </li>

                <li class="nav-item navsep">
                    <a class="nav-link" href="users.php">
                        <i class="fa fa-file-pdf-o fa-2x text-white"></i>
                        <span class="text-white h5">Students Data</span>
                    </a>
                </li>
                <li class="nav-item navsep">
                    <a class="nav-link" href="library.php">
                        <i class="fa fa-leanpub fa-2x text-white"></i>
                        <span class="text-white h5">Library</span>
                    </a>
                </li>
                <li class="nav-item navsep">
                    <a class="nav-link" href="libraryusers.php">
                        <i class="fa fa-file-pdf-o fa-2x text-white"></i>
                        <span class="text-white h5">Library Data</span>
                    </a>
                </li>

                <li class="nav-item navsep">
                    <a class="nav-link" href="logout.php">
                        <i class="fa fa-wrench fa-2x text-white"></i>
                        <span class="text-white h5">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 col-lg-9 bg-light">
            <div class="row bg-white">

                <div class="col-md-7 col-lg-7">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">
                                    <i class="	fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </nav>
                </div>

                <div class="col-md-5 col-lg-5">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarText">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">
                                            <i class="fa fa-shopping-basket fa-lg text-secondary"></i>
                                            <span class="badge bg-danger rounded-pill">+2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-rss fa-lg text-secondary"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> User| </a>
                                    </li>
                                    <li class="nav-item">
                                        <img src="images/kids.jpg" alt="loading" width="50" height="50"
                                             class="rounded-circle">
                                    </li>


                                </ul>

                            </div>
                        </div>
                    </nav>

                </div>

            </div>