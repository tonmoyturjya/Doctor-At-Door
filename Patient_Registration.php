<?php

$name = $gender = $dob = $bloodgroup = $uname = $email = $pass1 = $pass2 = $password= "";
$nameErr = $genderErr = $dobErr = $bloodgroupErr = $unameErr = $emailErr = $pass1Err = $pass2Err = $passwordErr= "";

if($_SERVER['REQUEST_METHOD']== "POST")
{
include('connect.php');

$name = $_POST['name'];
$gender = @$_POST['sex'];
$dob = $_POST['DOB'];
$bloodgroup = $_POST['bloodgroup'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$pass1 = $_POST['pass'];
$pass2 = $_POST['cpass'];

if (empty($_POST["name"]))
  {
    $nameErr = "Name is required";
  }

  if (!isset($_POST["sex"]))
  {
  $sexErr = "Sex is required";

  }

  if (empty($_POST["DOB"]))
  {
    $dobErr = "Date of birth is required";
  }

  if (empty($_POST["bloodgroup"]))
  {
    $bloodgroupErr = "Blood Group is required";
  }

  if (empty($_POST["uname"]))
  {
    $unameErr = "Username is required";
  }
  else
  {
      if (!preg_match("/^[a-zA-Z-' _]*$/",$uname))
    {
        $unameErr = "Only letters and white space allowed";
      }
  }

  if (empty($_POST["email"]))
  {
    $emailErr = "Email is required";
  }
  else
  {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["pass"]))
  {
    $pass1Err = "Password is required";
  }

  if (empty($_POST["cpass"]))
  {
    $pass2Err = "Please confirm password";
  }

  if ($pass1 !== $pass2)
    {
    $passwordErr=  "!Password doesn't match.";
    }
    if(empty($nameErr) && empty($genderErr) && empty($dobErr) && empty($bloodgroupErr) && empty($unameErr) && empty($emailErr) && empty($pass1Err) && empty($pass2Err) && empty($passwordErr))
    {
    $password = base64_encode($pass1);
$insertQuery = "INSERT into patient (Name, Gender, DOB, BloodGroup, Username, Email, Password) values ('$name', '$gender', '$dob', '$bloodgroup', '$uname', '$email', '$password')";

$result = mysqli_query($conn, $insertQuery);

if ($result)
{
header("Location: Patient_Login.php");
die();
}

    }


       
}
   

?>
<!DOCTYPE html>
<html>
<head>
<title>Patient Registration</title>
<style type="text/css">
  
  input
  {
    width: 200px;
    height: 20px;
    border-radius: 3px; 
    font-size: 20px;
  }
</style>
</head>
<body bgcolor="skyblue">
  <center>
<div class="header">
<h1>Patient Registration</h1>

</div>

<form method="POST" action="Patient_Registration.php" autocomplete="off">
<p><span class="error" >*required field</span></p>
<fieldset>
<legend><b>Basic Information</b></legend>
<div class="input">
<label>Name:</label>
<input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
</div>

<br>

<div class="input">
<label>Sex:</label>
<br>
<input type="radio" name="sex" value="female">Female
<br>
<input type="radio" name="sex" value="male">Male
<br>
<input type="radio" name="sex" value="other">Other
<br>
<span class="error">* <?php echo $genderErr;?></span>
</div>

<br>

<div class="input">
<label>Date of Birth:</label>
<input type="date" name="DOB">
<span class="error">* <?php echo $dobErr;?></span>
</div>

<br>
<div class="input">
<label>Blood Group:</label>
<select name="bloodgroup">
<option>---Select---</option>
   <option value="A Positive">A Positive</option>
   <option value="A Negative">A Negative</option>
   <option value="B Positive">B Positive</option>
   <option value="B Negative">B Negative</option>
   <option value="AB Positive">AB Positive</option>
   <option value="AB Negative">AB Negative</option>
   <option value="O Positive">O Positive</option>
   <option value="O Negative">O Negative</option>
</select>
<span class="error">* <?php
if(isset($bloodgroupErr))
{
echo $bloodgroupErr;
}
?></span>
</div>

<br>
</fieldset>
<br>

<fieldset>
<legend><b>User Information</b></legend>
<div class="input">
<input type="text" name="uname" placeholder="Username">
<span class="error">* <?php echo $unameErr;?></span>
</div>
<br>
<div class="input">
<input type="text" name="email" placeholder="Email">
<span class="error">* <?php echo $emailErr;?></span>
</div>
<br>
<div class="input">
<input type="Password" name="pass" placeholder="Password">
<span class="error">* <?php echo $pass1Err;?></span>
</div>
<br>
<div class="input">
<input type="Password" name="cpass" placeholder="Confirm Password">
<span class="error">* <?php echo $pass2Err;?></span>
</div>
<br>
<p class="error"><?php echo $passwordErr; ?></p>
</fieldset>
<br>

<div class="input">
<button type="submit" name="Sign-Up" class="btn">Register</button>
</div>
<p>
Already registered?<a href="Patient_Login.php">Login</a>
</p>
</form>
</center>
</body>
</html>