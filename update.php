<?php
include "header.php";
$link = mysqli_connect("localhost","root","","school");

     $id = $_GET["id"];

     $sql = "SELECT * FROM `users` WHERE id='$id'";

     $result=mysqli_query($link,$sql);

     if ($result){
         $data = mysqli_num_rows($result);

         if ($data ==1){
             $row = mysqli_fetch_array($result);

             $fullname = $row['fullname'];
             $email = $row['email'];
             $phonenumber = $row['phonenumber'];
             $dob = $row['dob'];
             $gender = $row['gender'];
             $location = $row['location'];
         }
     }else{
         echo "Error executing query $sql".mysqli_error($link);
     }
?>

    <form action="handleupdate.php" method="post" enctype="multipart/form-data">
        <div class="row m-2">
            <div class="col-md-6">
                <label class="form-label grey">Full Name</label>
                <input class="form-control" type="text" name="fullName" value="<?php echo $fullname;?>">
            </div>
            <div class="col-md-6">
                <a href="users.php">
                    <i class="fa fa-reply fa-2x text-black float-end ">BACK</i>
                </a>
                <label class="form-label grey">Email Address</label>
                <input class="form-control" type="email" name="emailAddress" value="<?php echo $email;?>">
            </div>

        </div>
        <div class="row m-2 p-2">
            <div class="col-md-6">
                <label class="form-label grey">Phone Number</label>
                <input class="form-control" type="tel" name="phoneNumber" value="<?php echo $phonenumber?>">
            </div>
            <div class="col-md-6">
                <label class="form-label grey">Address Location</label>
                <input class="form-control" type="text" name="location" value="<?php echo $location;?>">
            </div>

        </div>
        <div class="row m-2 p-2">
            <div class="col-md-6">
                <label class="form-label grey">Date of Birth</label>
                <input class="form-control" type="date" name="dob" value="<?php echo $dob;?>">
            </div>
            <div class="col-md-6">
                <label class="form-label grey">Gender</label>
                <select  class="form-control" name="gender" >
                    <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>


        </div>
        <div class="row p-2">
            <div class="col-md-12">
                <label class="form-label grey">Your Photo</label>
                <input class="form-control" type="file" name="photo">

            </div>
        </div>

        <div class="row p-2">
            <div class="col-md-12">
                <label class="form-label grey">ID</label>
                <input class="form-control" type="hidden" name="id" value="<?php echo $id?>">

            </div>

        </div>
        <div class="row m-2 p-2">
            <div class="text-center">
                <input type="submit" name="update" class="col-6 btn btn-danger" value="UPDATE">
            </div>

        </div>
    </form>
