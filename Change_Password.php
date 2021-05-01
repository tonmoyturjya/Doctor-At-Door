<?php 
    require_once "connect.php";
    session_start();
    $username = "";
    if(!isset($_SESSION["username"]))
    {
        header("Location: Patient_Login.php");
        exit;
    }
    $username = $_SESSION['username'];
    $password = $newPassword = $newPasswordConfirm = "";
    $passwordErr = $newPasswordErr = $newPasswordConfirmErr ="";
    $error = $success="";

    if($_SERVER['REQUEST_METHOD']== "POST")
    {
        $password = $_POST["currpass"];
        $newPassword = $_POST["newpass"];
        $newPasswordConfirm = $_POST["newpassconf"];

        if(empty($_POST["currpass"]))
        {
            $passwordErr = "Please enter your password";

        }
        if(empty($_POST["newpass"]))
        {
            $newPasswordErr = "Please enter a new password";
        }
        if(empty($_POST["newpassconf"]))
        {
            $newPasswordConfirmErr = "Please enter the password to confirm";
        }

        if (empty($passwordErr) && empty($newPasswordErr) && empty($newPasswordConfirmErr)) 
         {
             $encPassword = base64_encode($password);
             $result = mysqli_query($conn, "SELECT Password FROM patient WHERE Username='$username'");
             $row = mysqli_fetch_assoc($result);

 

            $oldpassword = $row ['Password'];
             if(!$result)
            {
                $error = "The username you entered does not exist";
            }
            else if($encPassword!= $row ['Password'])
            {

 

                $error = "You entered an incorrect password";
            }
            if($newPassword=$newPasswordConfirm)
            {
                $encPassword2 = base64_encode($newPassword);
                $sql=mysqli_query($conn, "UPDATE patient SET Password='$encPassword2' where Username='$username'");
            }
            if($sql)
            {
                $success= "Congratulations You have successfully changed your password";
            }
               else
            {
                   $error= "Passwords does not matched";
               }

 

 
         }
    }
?>


 

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <center>
    <div class="header">
        <h1>Change password</h1>
        
    </div>
    <form action="Change_Password.php" method="POST">
        <fieldset>
            <div class="input">
                <label>Current Password:</label>
                <input type="Password" name="currpass">
                <span class="error">* <?php echo $passwordErr;?></span>
            </div>
            <br>
            <div class="input">
                <label>New Password:</label>
                <input type="Password" name="newpass">
                <span class="error">* <?php echo $newPasswordErr;?></span>
            </div>
            <br>
            <div class="input">
                <label>Confirm New Password:</label>
                <input type="Password" name="newpassconf">
                <span class="error">* <?php echo $newPasswordConfirmErr;?></span>
            </div>
            <br>
            <p class="error"> <?php echo $error;  ?></p>
            <div class="input">
                <button type="submit" name="ChangePassword" class="btn">Change Password</button>
            </div>
            <br>
            <p>
                <?php
                echo $success;
                  ?>

            </p>
            <p>
                <a href="WelcomePage.php"><-Back</a>
            </p>
            <br>
        </fieldset>
    </form>

 

    </center>
</body>
</html>