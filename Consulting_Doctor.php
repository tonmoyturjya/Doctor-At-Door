<?php
    session_start();

 

    include('connect.php');
    $username = $alert = $error = $searchErr ="";

 

    if(!isset($_SESSION["username"]))
    {
        header("location: Login.php");
        exit;
    }



 

  ?>

 


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    

 

<title>Doctor Consulting Time</title>
</head>

 <center>

    <h1 class="header">Doctor Consulting Time</h1>
    <div>
        <form action="Consulting_Doctor.php" method="POST">
            <label><b>Search by DoctorID:</b></label>
            <input type="text" name="consulting" id="consulting" placeholder="Type in the DoctorID" oninput="showUser(this.value)">

 

            <input type="submit" name="doctorID" value="Submit" class="btn">

 

            <p><a href="WelcomePage.php"><-Back to Home</a></p>
        </form>
        <br>
        <div id="txtHint"></div>
        <br>

 

    </div>

 

    <script>
        function showUser(str)
        {
            if (str=="") 
            {
                document.getElementById("txtHint").innerHTML="";
                return;
            }

 

            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() 
            {
                if (this.readyState==4 && this.status==200) 
                {
                    document.getElementById("txtHint").innerHTML=this.responseText;
                }
            }
            xmlhttp.open("GET","Consulting.php?consulting="+str,true);
            xmlhttp.send();
        }
    </script>
    </center>
</body>
</html>