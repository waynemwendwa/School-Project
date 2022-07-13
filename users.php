<?php
include "header.php";

?>
<div class="row m-2">
    <div class="col-lg-6">
        <h4 class="text-secondary" style="font-family: Constantia"> Student Details</h4>
    </div>
    <div class="col-lg-6">
    <a href="Dashboard.php">
        <i class="fa fa-reply fa-2x text-black float-end ">BACK</i>
    </a>
    </div>
</div>
<?php
$link = mysqli_connect("localhost","root","","school");

$sql = "SELECT `id`,`fullname`,`email`,`phonenumber`,`location`,`dob`,`gender`FROM `users`";


$result = mysqli_query($link,$sql);

if ($result){
    $data = mysqli_num_rows($result);

    if ($data>0){
        echo "<table class='table table-success table-bordered'>";
        echo "<tr style='color: #0a53be;font-family: Constantia;font-size: 25px'>";
        echo "<th>#</th>";
        echo "<th>Full Name</th>";
        echo "<th>Email</th>";
        echo "<th>Phonenumber</th>";
        echo "<th>Location</th>";
        echo "<th>DOB</th>";
        echo "<th>Gender</th>";
        echo "<th>Action</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['fullname']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phonenumber']."</td>";
            echo "<td>".$row['location']."</td>";
            echo "<td>".$row['dob']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>
                 <a href='view.php?id=".$row['id']."'><i class='fa fa-eye' style='color: black'></i></a>
                 <a href='update.php?id=".$row['id']."'><i class='fa fa-edit' style='color: green'></i></a>
                 <a href='delete.php?id=".$row['id']."'><i class='fa fa-trash' style='color: red'></i></a>



                  </td>";
            echo "</tr>";

        }
        echo "</table>";
    }else{
        echo "No Data found in database";
    }

}else{
    echo "Error executing query $sql".mysqli_error($link);
}

?>