<?php
    include ('../config/dbconfig.php');

    $userFname = ($_POST["userFname"]);
    $allIns = "Select * 
                      from users_tbl 
                      where 
                      userFname = '$userFname'";
    $allInsRes = mysqli_query($conn, $allIns);
    $allInsCount = mysqli_num_rows($allInsRes); 

    if ($allInsCount == 1) {
       $row = mysqli_fetch_object($allInsRes);
       $arr = array('userId' => $row->userId,
                     'userFname' => $row->userFname,
                     'userLname' => $row->userLname,
                     'userEmail' => $row->userEmail,
                     'userPass' => $row->userPass);
       echo json_encode($arr);
    } else {
       echo "Error retrieving record.";
    }
$conn->close();