<?php
include ('../config/dbconfig.php');

$userId = $_POST['userId'];
$userFname = $_POST['userFname'];
$userLname = $_POST['userLname'];
$userEmail = $_POST['userEmail'];
$userPass = $_POST['userPass'];


    $updateQuery = "UPDATE users_tbl 
                    set userFname ='$userFname',
                    userLname = '$userLname',
                    userEmail = '$userEmail',
                    userPass = '$userPass'
                    where userId = ".$userId;
    $updateResult = mysqli_query($conn,$updateQuery);
    echo "User updated successfully";

$conn->close();
?>