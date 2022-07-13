<?php
include "header.php";
$link = mysqli_connect("localhost","root","","school");
if (isset($_GET['id']) and !empty($_GET['id'])){

    $id = $_GET["id"];

    $sql = "SELECT * FROM `library` WHERE id='$id'";

    $result = mysqli_query($link,$sql);

    if ($result){

        $data = mysqli_num_rows($result);

        if ($data==1){

            $row = mysqli_fetch_array($result);

              $fullname = $row['fullname'];
              $schoolid = $row['schoolid'];
              $Class = $row['class'];
              $gender = $row['gender'];
              $dob = $row['dateborrowed'];
              $srd = $row['scheduledreturndate'];



            ?>
            <div class="row m-2">
                <div class="col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <div>
                                <label class="form-label h6">FULL NAME;</label>
                                <p><?php echo "$fullname"?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <label class="form-label h6">EMAIL ADDRESS;</label>
                                <p><?php echo "$schoolid"?></p>
                            </div>
                            <div>
                                <label class="form-label h6">PHONE NUMBER;</label>
                                <p><?php echo "$Class"?></p>
                            </div>
                            <div>
                                <label class="form-label h6">GENDER;</label>
                                <p><?php echo "$gender"?></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <label class="form-label h6">DATE BORROWED;</label>
                                <p><?php echo "$dob"?></p>
                            </div>
                            <div>
                                <label class="form-label h6">SCHEDULED RETURN DATE;</label>
                                <p><?php echo "$srd"?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="libraryusers.php">
                <i class="fa fa-eye-slash" style="font-size: xxx-large;color: black"></i>
            </a>


            <?php
        }else{
            echo "No data was found";
        }

    }else {
        echo "Error executing query $sql".mysqli_error($link);
    }
}







