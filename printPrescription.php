<?php
$conn = mysqli_connect('localhost','DB_TONMOY_user_1', '123', 'db_tonmoy');
$query = "SELECT * FROM prescription";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result))
{
	echo "DoctorID - $row[doctorID]<br>";
	
	echo "PatientID - $row[patientID]<br>";
	
	echo "AppointmentID - $row[appointmentID]<br>";
	echo "Problem - $row[problem]<br>";
	echo "Prescribed Medicine - .$row[prescribedMedicine]<br>";
	echo "Prescribed Time - .$row[prescribedTime]<br>";
	echo "Comments - $row[comments]<br>";
}
?>