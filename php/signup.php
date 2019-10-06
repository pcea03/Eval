<?php
	include '../config/dbconfig.php';

    $fname=$_POST['fname'];
    $lname = $_POST['lname'];
	$email = $_POST['email'];
    $pass=$_POST['pass'];

	$sql = "INSERT INTO `users_tbl`( `userFname`, `userLname`, `userEmail`, `userPass`) 
	VALUES ('$fname','$lname','$email','$pass')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
 