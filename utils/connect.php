<?php
    $con = mysqli_connect('localhost', 'root', '');
    if(!$con){
        echo "Error, while connecting to the database";
        die;
    }
    mysqli_select_db($con, 'b02_fyp');
?>