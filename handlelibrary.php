<?php

include "header.php";

$link = mysqli_connect("localhost", "root", "", "school");

if (isset($_POST["submit"])){

    $fullname = $_POST["fullName"];
    $schoolid = $_POST["schoolid"];
    $Class = $_POST["class"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $srd = $_POST["srd"];


    $cvname = $_FILES["cv"]["name"];
    $cvtempname = $_FILES["cv"]["tmp_name"];
    $cvfolder = "uploads/" . $cvname;

    $sql = "INSERT INTO `library`( `fullname`, `schoolid`, `class`, `gender`, `bookborrowed`, `dateborrowed`, `scheduledreturndate`)
               VALUES ('$fullname','$schoolid','$Class','$gender','$cvname','$dob','$srd')";

    $result = mysqli_query($link, $sql);


    if (move_uploaded_file($cvtempname, $cvfolder)) {
        echo "<p class='alert alert-success'>Book has been uploaded</p>";
    } else {
        echo "Error uploading";
    }

    if ($result) {
        echo "<p class='alert alert-success'>Details stored successfully</p>";
    } else {
        echo "Error executing query $sql" . mysqli_error($link);
    }


}


