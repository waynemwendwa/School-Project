<?php

$link = mysqli_connect("localhost", "root", "", "school");

if (isset($_POST["Register"])) {
    $firstname = $_POST["fname"];
    $othername = $_POST["sname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_pass = $_POST["cpassword"];

    #matching pasword

    if ($password != $confirm_pass) {
        $c_pass_error = "Password does not match";
        echo $c_pass_error;
    }
    #lenght of pass

    if (strlen($password) < 6) {
        $l_pass_error = "Password must have 6 characters";
        echo $l_pass_error;
    }

    if (empty($c_pass_error) and empty($l_pass_error)) {

        #$store_pass = password_hash($password,PASSWORD_DEFAULT);


        $sql = "INSERT INTO `students`( `firstname`, `othername`, `email`, `password`)
                 VALUES ('$firstname','$othername','$email','$password')";


        $result = mysqli_query($link, $sql);

        if ($result) {
            echo "You have been registerd";
            header("location:login.php");
        } else {
            echo "error executing query $sql" . mysqli_error($link);
        }


    }

}