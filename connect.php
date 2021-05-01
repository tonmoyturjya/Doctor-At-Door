<?php

	$DBhostname='localhost';
	$DBusername='DB_TONMOY_user_1';
	$DBpassword='123';
	$DBname= 'db_tonmoy';

	$conn = mysqli_connect($DBhostname,$DBusername,$DBpassword,$DBname);

    if ($conn->connect_error) 
    {
       die("Error". mysqli_connect_error());
    }
?>