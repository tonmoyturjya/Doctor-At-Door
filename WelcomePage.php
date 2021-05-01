<?php 
    session_start();

 

    include('connect.php');
    $username = "";

 

    if(!isset($_SESSION["username"]))
    {
        header("location: Patient_Login.php");
        exit;
    }
    $username = $_SESSION['username'];

 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #6495ED;
      padding: 50px;
    }
    .jumbotron {
        background-image: url(https://www.tovima.gr/wp-content/uploads/2019/10/25/Doctor-patient-Relationship.png);
    }





  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="WelcomePage.php">Home</a></li>
        <li><a href="Payment.php">Payment</a></li>
        <li><a href="Change_Password.php">Change Password</a></li>
        <li><a href="Emergency_Helpline.php">Helpline</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Patient_Logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Doctor @ door</h1>      
    <p>Welcome Patient!</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Choose any of the following</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <a href="Doctor_Choosing.php">Choosing Doctor</a>
      <img src="http://cdn.onlinewebfonts.com/svg/img_491471.png" class="img-responsive" style="width:20%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <a href="Taking_Appointment.php">Taking Appointment</a>
      <img src="https://www.vhv.rs/file/max/2/26550_appointment-icon-png.png" class="img-responsive" style="width:20%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <a href="Patient_Health_Update.php">Update your Health Condition</a>
      <img src="https://www.biloxischools.net/cms/lib/MS01910473/Centricity/Domain/11/icon.png" class="img-responsive" style="width:20%" alt="Image">
    </div>
    <div class="col-sm-3">
      <a href="printPrescription.php"">Print Prescription</a>
      <img src="https://image.freepik.com/iconos-gratis/prescripcion-medica_318-48378.jpg" class="img-responsive" style="width:20%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
     <a href="Consulting_Doctor.php">Doctor Consulting</a>
      <img src="http://getdrawings.com/free-icon/doctor-patient-icon-52.png" style="width:20%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <a href="Confirm_Medicines.php">Confirming about medicines</a>
      <img src="https://pluspng.com/img-png/png-drugs-drugs-medication-pills-treatment-icon-512.png" class="img-responsive" style="width:20%" alt="Image">
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Good health is true wealth</p>
</footer>

</body>
</html>
