<?php
include "header.php";
$link = mysqli_connect("localhost","root","","school");
if (isset($_POST["update"])){

    $id = $_POST["id"];

    $fullname = $_POST['fullname'];
    $schoolid = $_POST['schoolid'];
    $Class = $_POST['class'];
    $gender = $_POST['gender'];
    $dob = $_POST['dateborrowed'];
    $srd = $_POST['scheduledreturndate'];

    $cvname = $_FILES["cv"]["name"];
    $cvtempname = $_FILES["cv"]["tmp_name"];
    $cvfolder = "uploads/" . $cvname;

    $sql = "UPDATE `library` SET `fullname`='$fullname',`schoolid`='$schoolid',`class`='$Class',
                     `gender`='$gender',`bookborrowed`='$cvname',`dateborrowed`='$dob',
                     `scheduledreturndate`='$srd' WHERE id='$id'";

    $result = mysqli_query($link,$sql);



    if (move_uploaded_file($cvtempname,$cvfolder)){
        echo "<p class='alert alert-success'>Book has been updated</p>";
    }else{
        echo "Error uploading";
    }

    if ($result){
        echo "<p class='alert alert-success'>Details updated successfully</p>";
    }else{
        echo "Error executing query $sql".mysqli_error($link);
    }

}
