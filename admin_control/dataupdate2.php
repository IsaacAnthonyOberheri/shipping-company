<?php
session_start();
require 'dbConfig.php';

$main_value = trim($_POST['main_value']);

$table_value = trim($_POST['table_value']);



$tracking_no = trim($_POST['tracking_value']);

// $update = "UPDATE registered_user SET first_name = '$first_name' && last_name = '$last_name' ";


$update = "UPDATE tracking_info SET $table_value = '$main_value' WHERE tracking_no = '$tracking_no' ";

$update = mysqli_query($con, $update);

if($update){
    echo 'updated';
}

else{
    echo 'something went wrong';
}




?>