<?php
require 'dbConfig.php';


$tracking_id = $_POST['tracking_id'];
$tracking_no = $_POST['tracking_no'];
$from_location = $_POST['from_location'];
$to_location = $_POST['to_location'];
$item_name = $_POST['item_name'];
$weight = $_POST['weight'];
$first_date = $_POST['first_date'];
$second_date = $_POST['second_date'];

$third_date = $_POST['third_date'];
$fourth_date = $_POST['fourth_date'];


$first_time = $_POST['first_time'];
$second_time = $_POST['second_time'];

$third_time = $_POST['third_time'];
$fourth_time = $_POST['fourth_time'];





$first_day_info = $_POST['first_day_info'];
$second_day_info = $_POST['second_day_info'];

$third_day_info = $_POST['third_day_info'];


$first_day_location = $_POST['first_day_location'];
$second_day_location = $_POST['second_day_location'];

$third_day_location = $_POST['third_day_location'];





	
		
		// $upload = "INSERT INTO tracking_info(id, tracking_id, tracking_no, from_location, to_location, item_name, weight, 
		// first_day_date, second_day_date, third_day_date, fourth_day_date, first_day_info, second_day_info, third_day_info, fourth_day_info,
		// first_day_location, second_day_location, third_day_location)"
        // ."VALUES('', '$tracking_id', '$tracking_no', '$from_location', '$to_location', '$item_name', '$weight', '$first_date', 
		// '$second_date', '$third_date', '$fourth_date', '$first_day_info', $second_day_info', '$third_day_info', '$fourth_day_info', 
		// '$first_day_location', '$second_day_location', '$third_day_location' )";





		
		$upload = "INSERT INTO tracking_info(tracking_id, tracking_no, from_location, to_location, item_name, weight, 
		first_day_date, second_day_date, third_day_date, fourth_day_date, first_day_time, second_day_time, third_day_time, fourth_day_time, 
		first_day_info, second_day_info, third_day_info, first_day_location, second_day_location, third_day_location)"
		."VALUES('$tracking_id', '$tracking_no', '$from_location', '$to_location', '$item_name', '$weight', '$first_date', 
		'$second_date', '$third_date', '$fourth_date', '$first_time', '$second_time', '$third_time', '$fourth_time', '$first_day_info', 
		'$second_day_info', '$third_day_info', '$first_day_location', '$second_day_location', '$third_day_location' )";


		$update = mysqli_query($con, $upload);

		if($update){
			
			echo 'upload successful';
		}

		else{

				echo 'Failed '.$upload.'<br>'. $con->error;
		}
       

	
			
	








$con -> close();








?>