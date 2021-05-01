<?php
include('connect.php');
$doctorpref =$_GET["doctorpref"];
$sql = "SELECT * FROM doctor WHERE ExpertIn like '$doctorpref%' ";
$result = mysqli_query($conn, $sql);
if($result)
{



if(mysqli_num_rows($result) > 0)
{
echo "<table class='center'>";
echo "<tr>";
echo "<th>Doctor ID</th>";
echo "<th>Doctor Name</th>";
echo "<th>Doctor Email</th>";
echo "<th>Doctor Degree</th>";
echo "<th>Doctor ExpertIn</th>";
echo "<th>Doctor Status</th>";
echo "</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['doctorID'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['Degree'] . "</td>";
echo "<td>" . $row['ExpertIn'] . "</td>";
echo "<td>" . $row['Status'] . "</td>";
echo "</tr>";
}
echo "</table>";
}
}




?>