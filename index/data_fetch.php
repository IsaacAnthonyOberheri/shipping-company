<?php
require 'dbConfig.php';

$search = trim($_POST['searched']);

$find = "SELECT * FROM tracking_info WHERE tracking_no = '$search' ";
$query = mysqli_query($con, $find);

$result = mysqli_fetch_array($query);

//echo $result['tracking_id'];

//creating an associative array

if(mysqli_num_rows($query) > 0){
    //echo 'good';

    
$arrayed_result['list'] = [

    'id' => $result['id'],
    
    'tracking_id' => $result['tracking_id'],

    'tracking_no' => $result['tracking_no'],
    'from_location' => $result['from_location'],

    'to_location' => $result['to_location'],
    'item_name' => $result['item_name'],

    'weight' => $result['weight'],

    'first_day_date' => $result['first_day_date'],
    'second_day_date' => $result['second_day_date'],

    'third_day_date' => $result['third_day_date'],
    'fourth_day_date' => $result['fourth_day_date'],
    

    'first_day_time' => $result['first_day_time'],
    'second_day_time' => $result['second_day_time'],

    'third_day_time' => $result['third_day_time'],
    'fourth_day_time' => $result['fourth_day_time'],

    'first_day_info' => $result['first_day_info'],
    'second_day_info' => $result['second_day_info'],

    'third_day_info' => $result['third_day_info'],
    'fourth_day_info' => $result['fourth_day_info'],


    'first_day_location' => $result['first_day_location'],
    'second_day_location' => $result['second_day_location'],

    'third_day_location' => $result['third_day_location'],
    'fourth_day_location' => $result['fourth_day_location']

  




];

$json_result = json_encode($arrayed_result);
echo $json_result;
}

else{

        
$arrayed_result['list'] = [

    'error' => 'error'

];

$json_result = json_encode($arrayed_result);
echo $json_result;

}









?>