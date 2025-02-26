<?php

session_start();
require 'dbConfig.php';


//$search_input =trim('caix_4re22ixs');


 $search_input = trim($_POST['searched']);

$select = "SELECT * FROM tracking_info WHERE tracking_no ='$search_input' ";
$queried = mysqli_query($con, $select);

$fetch_value = mysqli_fetch_assoc($queried);

$new_array['list'] = [
    'id' => $fetch_value['id'],
    'tracking_id' => $fetch_value['tracking_id'],
    'tracking_no' => $fetch_value['tracking_no'],
    'from_location' => $fetch_value['from_location'],
    'to_location' => $fetch_value['to_location'],
    'item_name' => $fetch_value['item_name'],
    'weight' => $fetch_value['weight'],
    'first_day_date' => $fetch_value['first_day_date'],
    'second_day_date' => $fetch_value['second_day_date'],
    'third_day_date' => $fetch_value['third_day_date'],
    'fourth_day_date' => $fetch_value['fourth_day_date'],

    'first_day_time' => $fetch_value['first_day_time'],
    'second_day_time' => $fetch_value['second_day_time'],
    'third_day_time' => $fetch_value['third_day_time'],
    'fourth_day_time' => $fetch_value['fourth_day_time'],

    'first_day_info' => $fetch_value['first_day_info'],
    'second_day_info' => $fetch_value['second_day_info'],
    'third_day_info' => $fetch_value['third_day_info'],
    'fourth_day_info' => $fetch_value['fourth_day_info'],

    'first_day_location' => $fetch_value['first_day_location'],
    'second_day_location' => $fetch_value['second_day_location'],
    'third_day_location' => $fetch_value['third_day_location'],
    'fourth_day_location' => $fetch_value['fourth_day_location']
    
    

];


$json_encoded_value = json_encode($new_array);

echo $json_encoded_value;







?>