<?php

 $Name = $_POST[name]; 
 $Uname = $_POST[uname]; 
 $Dob = $_POST[dob]; 
 $Gender = $_POST[Gender]; 
 $Ans1 = $_POST[ans1]; 
 $Ans2 = $_POST[ans2]; 
 $Ans3 = $_POST[ans3]; 

 $dbconnect = mysql_connect('localhost', 'DB_TONMOY_user_1', '123', 'patientupdate' );
 if(mysql_connect_errno($dbconnect))
 {
 	echo "Failed"; 	
 }
 else
 {
 	echo "Successfull";
 }

 ?>