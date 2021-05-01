<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
  
  input
  {
    width: 180px;
    height: 20px;
    border-radius: 5px; 
    font-size: 20px;
  }
</style>
	<title>Patient's Health Update</title>
	<script type="text/javascript">
		function validate()
		{
			var name = document.forms["patientHealthUpdate"]["name"].value;

			if(name == "")
			{
				alert("Please Enter your Name!");
				return false;
			}

			var dob = document.forms["patientHealthUpdate"]["dob"].value;

			if(dob == "")
			{
				alert("Please Enter your Date of Birth!");
				return false;
			}

			var Gender = document.forms["patientHealthUpdate"]["Gender"].value;

			if(Gender == "")
			{
				alert("Please Enter your Gender!");
				return false;
			}

			var dname = document.forms["patientHealthUpdate"]["dname"].value;

			if(dname == "")
			{
				alert("Please Enter your Appointed Doctor Name!");
				return false;
			}

			var ans1 = document.forms["patientHealthUpdate"]["ans1"].value;

			if(ans1 == "")
			{
				alert("Please answe the question!");
				return false;
			}

			var ans2 = document.forms["patientHealthUpdate"]["ans2"].value;

			if(ans2 == "")
			{
				alert("Please answe the question!");
				return false;
			}

			var ans3 = document.forms["patientHealthUpdate"]["ans3"].value;

			if(ans3 == "")
			{
				alert("Please answe the question!");
				return false;
			}


		}


	</script>
</head>
<body bgcolor="skyblue">
	<center>
	<form action="updateInsert.php" name="patientHealthUpdate" onsubmit="return validate()" method="post">
		<fieldset>
		<h1>Patient's Health Update</h1>
		Patient Name: <input type="text" name="name" id ="">
		<br>
		Patient Username: <input type="text" name="uname" id="">
		<br>
		Date of Birth: <input type="Date" name="dob" id ="">
		<br>
		Gender: 
		<br>

        <input type="radio" name="Gender" value="male">Male
        <br>
        <input type="radio" name="Gender" value="female">Female
        <br>
        <input type="radio" name="Gender" value="other">Other
		<br>
		Appointed Doctor Name: <input type="text" name="dname" id="">
		<br>

		</fieldset>
		<fieldset>

		<h2>Update your health condition</h2>
		<br>
		Is your Blood Pressure under control?
		<br>
		<input type="text" name="ans1" id="">
		<br>
		Do you feel chest Pressure anytime?
		<br>
		<input type="text" name="ans2" id="">
		<br>
		Give details of cholesterol levels in your body
		<br>
		<input type="text" name="ans3" id="">
		<br>

		<input type="submit" name="Submit" value="Submit">

		</fieldset>





	</form>
	</center>

</body>
</html>