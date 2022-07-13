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
<div class="container-fluid background">
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
                    <a class="nav-link" href="#">
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
                                <input class="form-control me-2" type="search" placeholder="Search here" aria-label="Search">
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
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
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
                                        <img src="images/kids.jpg" alt="loading" width="50" height="50" class="rounded-circle">
                                    </li>


                                </ul>

                            </div>
                        </div>
                    </nav>

                </div>

            </div>

            <div class="row m-2">
                <div class="col-sm-6">
                    <h3 class="text-secondary">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        LAUNCH
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">WELCOME TO GOLDEN WALL SCHOOL ADMINISTRATION SYSTEM</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    This is a system developed by Wayne Mwendwa.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row m-2">
                <div class="col-sm-6 col-lg-6">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                  <i class="fa fa-cloud" style="font-size: 25px">Golden Wall School Introduction</i>
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <p>Golden Wall School is a mixed secondary school located in Milimani Area in Kisumu.
                                        <br>
                                        It was founded by HR.Justice Kimaru in the year 1980. <br>
                                        It is well know for producing excellent results each year in the national examinations.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                  <i class="fa fa-book" style="font-size: 25px"> Academic History</i>
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                   Since the year the school was funded it put in a lot of effort in academics and this was evident in the National examinations.
                                    <br>
                                    Posting not less than a mean of 10.0 in the national exams.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                     <i class="fa fa-address-book m-2" style="font-size: 25px">Contact Us</i>
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <label>Email us @  goldenwallschool@yahoo.com</label><br>
                                    <label>Call us @ +254 745678965  or +2547123456</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="bg-white">
                        <div class="m-2 p-2">
                            <span>Students Admission</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                        <div class="p-2 m-2">
                            <span>Projects Development</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </div>
                        <div class="m-2 p-2">
                            <span>Curriculum Development</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>
                        <div class="p-2 m-2">
                            <span>Syllabus Coverage</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row m-2">

                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Student Population
                            <span class="badge bg-primary rounded-pill">1500</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Teacher Population
                            <span class="badge bg-danger rounded-pill">150</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Projects at hand
                            <span class="badge bg-success rounded-pill">2 new dormitories</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Library book Capaciy
                            <span class="badge bg-warning rounded-pill">4500 books</span>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>
</body>
</html>
