<!DOCTYPE html>
<html>
<head>
  <title>Taking Appointment</title>

  <script type="text/javascript">
		function validate()
		{
			var date = document.forms["takingAppointment"]["date"].value;

			if(date == "")
			{
				alert("Please Enter Appointment Date!");
				return false;
			}

  </script>		
</head>
	<style type="text/css">
  
  input
  {
    width: 300px;
    height: 30px;
    border-radius: 5px; 
    font-size: 30px;
  }
</style>
<body bgcolor="skyblue">

	<form name="takingAppointment" onsubmit="return validate()" method="post">
	<center>
<h1>Book an Appointment</h1>
<input type="text" name="username" placeholder="Username">
<br>



<input type="text" name="doctorID" placeholder="Doctor ID">
<br>
<input type="text" name="doctorName" placeholder ="Doctor Name">
<br>
<br>
<label>Category:</label> 
<select name="Category">
  <option value="General Physician">General Physician</option>
  <option value = "Bone Specialist">Bone Specialist</option>
  <option value = "Dentist">Dentist</option>
  <option value = "Heart Specialist">Heart Specialist</option>
  <option value = "Kidney">Kidney</option>
  <option value = "Eye">Eye</option>
  <option value = "gynecologist">gynecologist</option>
</select>
<br>
<h2>Appointment Date</h2><input type="date" name="date">
<br>
<h2>Choose a time</h2>
9.00am - 11.00am<input type="checkbox" name="">
<br>
11.00am - 1.00pm<input type="checkbox" name="">
<br>
1.00pm - 3.00pm<input type="checkbox" name="">
<br>
3.00pm - 5.00pm<input type="checkbox" name="">
<br>
5.00pm - 7.00pm<input type="checkbox" name="">
<br>

<button type="Submit" name="Submit" class="Submit"><h3>Submit</h3></button>


</center>
</form>
</body>
</html>