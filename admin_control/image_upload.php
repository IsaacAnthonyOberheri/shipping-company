<?php
require 'dbConfig.php';
$identifier = $_POST['identifier'];


$filesize=$_FILES["bodyimage"]['size'];
$filename = $_FILES["bodyimage"]["name"];
$tmpname = $_FILES["bodyimage"]["tmp_name"];

		$target_dir= "../img/";
		$target_file = $target_dir.basename($filename);
		
		$filetype=pathinfo($target_file,PATHINFO_EXTENSION);
	if ($filesize > 400000){
		$eupload = "your file is too large";
        echo $eupload;
	}

	// elseif ($filetype != 'jpg' && $filetype != 'jpeg' && $filetype != 'PNG' && $filetype != 'png' && $filetype != 'gif'  && $filetype != 'jfif' && $filetype != 'JPG'){
	//    $eupload = "file type not accepted";
		
	// }

	elseif (move_uploaded_file($tmpname, $target_file)){
			$eupload = "update sucessful";
		$upload = "UPDATE registered_user SET passport_name = '$filename' WHERE identifier = '$identifier' ";
		mysqli_query($con, $upload);
			// $request = "SELECT * FROM home_table WHERE id = 1";
			// $request2 = $mysqli->query($request);
			// $user = $request2->fetch_assoc();
			// $rowrr = $user['photo'];
			// $_SESSION['ro'] = $rowrr;
			// $_SESSION['photo'] = '<img src="picture/'.$user["photo"].'" style="width:150px; height:150px;" />';
			
			
		}
	else{
	    $eupload = "update failed";
        echo $eupload;
}


?>