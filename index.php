<?php
require_once("php/session.php");
require_once("config/dbconfig.php");

if(logged_in())
{
?>
	<script type="text/javascript"> 
		window.location="home.php";
	</script>
<?php
}

if (isset($_POST['login']))
{
	$userEmail = mysqli_real_escape_string($conn, $_POST['email']);
	$userPass = mysqli_real_escape_string($conn,$_POST['pass']);

	$query = "SELECT * from users_tbl where userEmail ='$userEmail' and userPass ='$userPass'";
	$result = mysqli_query($conn,$query);
	$count = mysqli_num_rows($result);
	$row = mysqli_fetch_object($result);

	if($count == 1)
	{
		$_SESSION["userFname"] = $row->userFname;
		$_SESSION["userLname"] = $row->userLname;
		$_SESSION["userEmail"] = $row->userEmail;
		$_SESSION["userPass"] = $row->userPass;

		?>
		<script type="text/javascript"> 
			alert("Welcome! <?php echo $_SESSION["userFname"]; ?>!");
			window.location = "home.php";
		</script>
		<?php
	}else
		{
			?>
				<script type="text/javascript">
					alert("Invalid email or password! Please Contact your administrator.");
				</script>
			<?php
		}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feval Online System</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/signin.css" rel="stylesheet">
    

</head>
<body>
<div class="form-structor">
    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<form action="#" method="POST">

		<div class="login">
				<h2 class="form-title" id="login">Log in</h2>
				<div class="form-holder">
					<input type="email" class="input" name="email" placeholder="Email" required/>
					<input type="password" class="input" name="pass" placeholder="Password" required/>
				</div>
				<button class="submit-btn" name="login">Log in</button>
		</div>

	</form>

	<form  method="POST" id="fupform">
		<div class="signup slide-up">
			<div class="center">
				<h2 class="form-title" id="signup">Sign up</h2>
				<div class="form-holder">
					<input type="text" class="input" name="fname" id="fname" placeholder="First Name" required />
					<input type="text" class="input" name="lname" id="lname" placeholder="Last Name" required/>
					<input type="email" class="input" name="email" id="email" placeholder="Email" required/>
					<input type="password" class="input" name="pass" id="pass" placeholder="Password" required/>
				</div>
				<input type="button" name="save" class="submit-btn" value="Save to database" id="butsave">
			</div>  
		</div>

	</form>

</div>
<script src="js/main.js"></script>
</body>

</html>