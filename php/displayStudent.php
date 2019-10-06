<?php
  require_once('../config/dbconfig.php');
  include ('modals.php');
  $query = "SELECT * FROM users_tbl";
  $result = mysqli_query($conn, $query);
  // $all = mysqli_fetch_all($result,MYSQLI_ASSOC);


?>

    <div class="container-fluid">
      <h2>Excel Technical Skills and Training Center</h2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
          <p>This is a responsive sidebar template with dropdown menu based on bootstrap 4 framework.</p>
          <p> You can find the complete code on <a href="https://github.com/azouaoui-med/pro-sidebar-template" target="_blank">
              Github</a>, it contains more themes and background image option</p>
        </div>
      </div>
      <h5>More templates</h5>
      <hr>

      <div id="no-more-tables">
            <table class="col-md-12 table-striped cf text-center">
        		<thead class="cf">
        			<tr>
        				<th>First Name</th>
        				<th>Last Name</th>
        				<th>Email</th>

                <th colspan="2" style="margin-right:-2px;">Action</th>
        			</tr>
        		</thead>
        		<tbody>
            <?php while($row = mysqli_fetch_array($result)){?>
        			<tr>
        				<td data-title="First Name"><?php echo $row['userFname'];?></td>
        				<td data-title="Last Name"><?php echo  $row['userLname'];?></td>
        				<td data-title="Email" class="numeric"><?php echo $row['userEmail'];?></td>

        				<td><button class="btn btn-secondary btn-block" data-toggle="modal" data-target="#updateUserModal" onclick="retrieveUser('<?php echo $row['userFname']; ?>')">Edit</button></td>
        				<td><button class="btn btn-secondary btn-block" style="margin-right:-15px;">Delete</button></td>
                </td>
        			</tr>
            <?php }?>
        		</tbody>
        	</table>
        </div>




    
