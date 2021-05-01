<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
 <?php 

session_start();

if (isset($_SESSION['username'])) {
    session_destroy();
    header("location:Patient_Login.php");
    
}

 

else{
    header("location:Patient_Login.php");
}

 ?>
</body>
</html>