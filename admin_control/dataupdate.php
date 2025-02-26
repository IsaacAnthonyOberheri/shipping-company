<?php
session_start();
require 'dbConfig.php';

$first_name = trim($_POST['first_name']);

$last_name = trim($_POST['last_name']);

$identifier = trim($_POST['identifier']);

// $update = "UPDATE registered_user SET first_name = '$first_name' && last_name = '$last_name' ";


$update = "UPDATE registered_user SET first_name = '$first_name', last_name = '$last_name' WHERE identifier = '$identifier' ";

$update = mysqli_query($con, $update);

if($update){
    echo 'updated';
}

else{
    echo 'something went wrong';
}




?>