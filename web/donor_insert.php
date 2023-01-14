<?php
//Database file....
	include 'config.php';
	
//geting ajax data in vareable...	
	
	$name=$_POST['name'];
    $blood=$_POST['blood'];
	$contact=$_POST['contact'];

    if (isset($name)){	
	$sql = "INSERT INTO `donor`( `name`, `blood`,`contact_number`) 
	VALUES ('$name','$blood','$contact')";
	
	if (mysqli_query($link, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
}else{
    echo json_encode(array("statusCode"=>201));
}
?>