<?php
include('connect.php');
$consulting =$_GET["consulting"];
$sql = "SELECT * FROM doctorscheduletable WHERE doctorScheduleStartTime like '$consulting%' ";
$result = mysqli_query($conn, $sql);
if($result)
{



if(mysqli_num_rows($result) > 0)
{
echo "<table class='center'>";
echo "<tr>";
echo "<th>Doctor ID</th>";
echo "<th>Avaiable Day</th>";
echo "<th>Average Consultime Time</th>";
echo "<th>Start time</th>";
echo "<th>End Time</th>";
echo "<th>Doctor Status</th>";
echo "</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['doctorID'] . "</td>";
echo "<td>" . $row['doctorScheduleDay'] . "</td>";
echo "<td>" . $row['averageConsultingTime'] . "</td>";
echo "<td>" . $row['doctorScheduleStartTime'] . "</td>";
echo "<td>" . $row['doctorScheduleEndTime'] . "</td>";
echo "<td>" . $row['doctorScheduleStatus'] . "</td>";
echo "</tr>";
}
echo "</table>";
}
}




?>