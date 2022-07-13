<?php
include "header.php";
$link = mysqli_connect("localhost","root","","school");

$id = $_GET["id"];

$sql = "SELECT * FROM `library` WHERE id='$id'";

$result=mysqli_query($link,$sql);

if ($result){
    $data = mysqli_num_rows($result);

    if ($data ==1){
        $row = mysqli_fetch_array($result);

        $fullname = $row['fullname'];
        $schoolid = $row['schoolid'];
        $Class = $row['class'];
        $gender = $row['gender'];
        $dob = $row['dateborrowed'];
        $srd = $row['scheduledreturndate'];
    }
}else{
    echo "Error executing query $sql".mysqli_error($link);
}
?>

<div class="row m-2">
    <form action="handlelupdate.php" method="post" enctype="multipart/form-data">
        <div class="row m-2">
            <div class="col-md-6">
                <label class="form-label grey">Full Name</label>
                <input class="form-control" type="text" name="fullname" value="<?php echo $fullname;?>">
            </div>
            <div class="col-md-6">
                <a href="library.php">
                    <i class="fa fa-reply fa-2x text-black float-end ">BACK</i>
                </a>
                <label class="form-label grey">School ID</label>
                <input class="form-control" type="text" name="schoolid" value="<?php echo $schoolid;?>">
            </div>

        </div>
        <div class="row m-2 p-2">
            <div class="col-md-6">
                <label class="form-label grey">Class</label>
                <input class="form-control" type="text" name="class" value="<?php echo $Class;?>">
            </div>

            <div class="col-md-6">
                <label class="form-label grey">Gender</label>
                <select class="form-control" name="gender">
                    <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
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
                    <input class="form-control" type="date" name="dateborrowed" value="<?php echo $dob;?>" >
                </div>
                <div class="col-md-6">
                    <label class="form-label grey">Scheduled return date</label>
                    <input class="form-control" type="date" name="scheduledreturndate" value="<?php echo $srd;?>" >
                </div>

            </div>
            <div class="col-md-12">
                <label class="form-label grey">Book borrowed</label>
                <input class="form-control" type="file" name="cv">
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
                <input type="submit" name="update" class="col-6 btn btn-secondary" value="UPDATE">
            </div>

        </div>
    </form>
</div>


