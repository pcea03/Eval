<?php
require ('../config/dbconfig.php');
if(isset($_POST['res'])){
    $query = $conn->query("SELECT * FROM users_tbl");
    while($row=$query->fetch_array()){
        echo "
        <tr>
        <td>".$row['userFname']."</td>
        <td>".$row['userLname']."</td>
        <td>".$row['userEmail']."</td>
        </tr>
            ";

    }
}
?>