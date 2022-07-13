<?php
include "header.php";

?>
<div class="row m-2">
    <div class="col-lg-6">
        <h4 class="text-secondary" style="font-family: Constantia"> Library Users Details</h4>
    </div>
    <div class="col-lg-6">
        <a href="Dashboard.php">
            <i class="fa fa-reply fa-2x text-black float-end ">BACK</i>
        </a>
    </div>

</div>
<?php
$link = mysqli_connect("localhost","root","","school");

$sql = "SELECT `id`, `fullname`, `schoolid`, `class`, `gender`, `dateborrowed`, `scheduledreturndate` FROM `library`";


$result = mysqli_query($link,$sql);

if ($result){
    $data = mysqli_num_rows($result);

    if ($data>0){
        echo "<table class='table table-success table-bordered'>";
        echo "<tr style='color: #0a53be;font-family: Constantia;font-size: 25px'>";
        echo "<th>#</th>";
        echo "<th>Full Name</th>";
        echo "<th>School ID</th>";
        echo "<th>Class</th>";
        echo "<th>Gender</th>";
        echo "<th>Date Borrowed</th>";
        echo "<th>Scheduled return date</th>";
        echo "<th>Actions</th>";

        echo "</tr>";
        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['fullname']."</td>";
            echo "<td>".$row['schoolid']."</td>";
            echo "<td>".$row['class']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>".$row['dateborrowed']."</td>";
            echo "<td>".$row['scheduledreturndate']."</td>";

            echo "<td>
                 <a href='lview.php?id=".$row['id']."'><i class='fa fa-eye' style='color: black'></i></a>
                 <a href='lupdate.php?id=".$row['id']."'><i class='	fa fa-edit' style='color: green'></i></a>
                 <a href='ldelete.php?id=".$row['id']."'><i class='fa fa-trash' style='color: red'></i></a>



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
