<?php
include ('../config/dbconfig.php');
$userid = $_POST["userId"];


if($userid > 0){

    // Check record exists
    $checkRecord = mysqli_query($conn,"SELECT * FROM users_tbl WHERE userId=".$userid);
    $totalrows = mysqli_num_rows($checkRecord);
  
    if($totalrows > 0){
      // Delete record
      $query = "DELETE FROM users_tbl WHERE userId=".$userid;
      mysqli_query($conn,$query);
      echo 1;
      exit;
    }
  }
  
  echo 0;
  exit;
?>