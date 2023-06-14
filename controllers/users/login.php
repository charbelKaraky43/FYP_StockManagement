<?php 
include('../../utils/connect.php');
if (!empty($_POST)){
        extract($_POST);
        if (!filter_var($username_OR_email, FILTER_VALIDATE_EMAIL)) {
            $query = "SELECT * FROM `admin` WHERE `username`='$username_OR_email' and `password`='$password';";
        } else {
            $query = "SELECT * FROM `admin` WHERE `email`='$username_OR_email' and `password`='$password';";
        }
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result)>0) {
                header('Location:../home.php');
                exit();
            }
        }
    mysqli_close($con);
?>