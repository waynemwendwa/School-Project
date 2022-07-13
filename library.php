<?php

include "header.php";
?>

<div class="row m-2">
    <form action="handlelibrary.php" method="post" enctype="multipart/form-data">
        <div class="row m-2">
            <div class="col-md-6">
                <label class="form-label grey">Full Name</label>
                <input class="form-control" type="text" name="fullName" placeholder="">
            </div>
            <div class="col-md-6">
                <a href="Dashboard.php">
                    <i class="fa fa-reply fa-2x text-black float-end ">BACK</i>
                </a>
                <label class="form-label grey">School ID</label>
                <input class="form-control" type="text" name="schoolid">
            </div>

        </div>
        <div class="row m-2 p-2">
            <div class="col-md-6">
                <label class="form-label grey">Class</label>
                <input class="form-control" type="text" name="class">
            </div>

            <div class="col-md-6">
                <label class="form-label grey">Gender</label>
                <select class="form-control" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>


        </div>
        <div class="row p-2">

        <div class="row m-2 p-2">
            <div class="col-md-6">
                <label class="form-label grey">Date borrowed</label>
                <input class="form-control" type="date" name="dob" >
            </div>
            <div class="col-md-6">
                <label class="form-label grey">Scheduled return date</label>
                <input class="form-control" type="date" name="srd" >
            </div>

        </div>
            <div class="col-md-12">
                <label class="form-label grey">Book borrowed</label>
                <input class="form-control" type="file" name="cv">
            </div>
        </div>
        <div class="row p-2">


        </div>
        <div class="row m-2 p-2">
            <div class="text-center">
                <input type="submit" name="submit" class="col-6 btn btn-secondary" value="SUBMIT">
            </div>

        </div>
    </form>
</div>
