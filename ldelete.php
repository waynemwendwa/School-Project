<?php
include "header.php";
$link = mysqli_connect("localhost","root","","school");
if (isset($_POST["submit"])){

    $id = $_POST["id"];

    $sql = "DELETE FROM `library` WHERE id='$id'";

    $result = mysqli_query($link,$sql);

    if ($result){

        echo "<p class='alert alert-danger'>User details deleted successfully</p>";


    }else{
        echo "Error deleting record $sql".mysqli_error($link);
    }
}


?>

<div class="row m-2">
    <div class="alert alert-danger">
        <form class="text-center" action="ldelete.php" method="post" >
            <div class="p-2">
                <label class="form-label">Are you sure you want to delete this user's details</label>
                <input class="form-control" type="hidden" name="id" value="<?php echo $_GET['id']; ?>" >
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="YES" name="submit">
                <a class="btn btn-success" href="libraryusers.php">NO</a>
            </div>
        </form>
    </div>
</div>


