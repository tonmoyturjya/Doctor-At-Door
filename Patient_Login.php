<?php
	require_once "connect.php";
	
	session_start();
	

	if (isset($_SESSION['uname'])) 
	{
    	header("Location: WelcomePage.php");
	}

	$uname = $pass ="";
 	$usernameErr = $passwordErr ="";
 	
 	if($_SERVER['REQUEST_METHOD']== "POST")
 	{
 		

 		$uname = $_POST["uname"];
 		$pass = $_POST["pass"];

 		if(empty($_POST["uname"]))
 		{
 			$usernameErr = "Please enter a username.";
 		}

 		if(empty($_POST["pass"]))
 		{
 			$passwordErr = "Please enter a password.";
 		}

 		if(empty($usernameErr) && empty($passwordErr))
 		{
 			$encPassword = base64_encode($pass);
	 		$sql = "SELECT * FROM patient WHERE Username = '$uname' AND Password='$encPassword'";
			$result = mysqli_query($conn, $sql);
			if ($result->num_rows > 0) 
			{
				$row = mysqli_fetch_assoc($result);
				session_start();
				$_SESSION['username'] = $row['Username'];
				header("Location: WelcomePage.php");
				exit;
			} 
			else 
			{
				echo "Invalid username or password";
			}
 		}
		
 	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
  
  input
  {
    width: 300px;
    height: 40px;
    border-radius: 5px; 
    font-size: 30px;
  }
</style>

<script type="text/javascript">
		function validation()
		{
			var uname = document.getElementById('uname').value;

			if(uname == "")
			{
				alert("Please Enter your Username!");
				return false;
			}

			var pass = document.getElementById('pass').value;

			if(pass == "")
			{
				alert("Please Enter your Password!");
				return false;
			}

</script>

	
</head>
<body background="https://beardiehealth.com/wp-content/uploads/2019/02/Seeing-Their-Doctor.jpg">
	<center>
	<div class="header">
		<h1>Login</h1>
		
	</div>

	<form method="POST" action="Patient_Login.php" onsubmit="return validation();">

		
			<fieldset>
				<p><span class="error" >*required field</span></p>
				<div class="input">
					
					<input type="text" name="uname" placeholder="Username">
					<span class="error">* <?php echo $usernameErr;?></span>
				</div>
				<br>
				<div class="input">
		
					<input type="Password" name="pass" placeholder="Password">
					<span class="error">* <?php echo $passwordErr;?></span>
				</div>
				<br>
			</fieldset>	
			<br>

		<div class="input">
			<button type="submit" name="Login" class="btn"><h3>Login</h3></button>
		</div>
			<p>
				Not a member?<a href="Patient_Registration.php">Register now</a>
			</p>
	</form>
	</center>

</body>
</html>