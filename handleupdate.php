<?php
include "header.php";
$link = mysqli_connect("localhost","root","","school");
if (isset($_POST["update"])){

    $id = $_POST["id"];
    $fullname = $_POST["fullName"];
    $email = $_POST["emailAddress"];
    $phone = $_POST["phoneNumber"];
    $location = $_POST["location"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];

    $photoname = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder ="uploads/".$photoname;


    $sql = "UPDATE `users` SET  `fullname`='$fullname',`email`='$email',`phonenumber`='$phone',
                      `location`='$location',`dob`='$dob',`gender`='$gender',`photo`='$photoname' WHERE id='$id'";

    $result = mysqli_query($link,$sql);

    if (move_uploaded_file($tempname,$folder)){
        echo "<p class='alert alert-success'>Image has been updated</p>";
    }else{
        echo "Error uploading";
    }



    if ($result){
        echo "<p class='alert alert-success'>Details updated successfully</p>";
    }else{
        echo "Error executing query $sql".mysqli_error($link);
    }

}