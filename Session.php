<?php
        session_start();


        $dtls = file_get_contents('data.json');
        $dtlsok = json_decode($dtls);



        foreach($dtlsok as $ok)
        {
            $username=$ok->username;
            $password=$ok->pass;
        }


if (isset($_POST['username'])) {
    if ($_POST['username']==$username && $_POST['pass']==$password) {
        $_SESSION['username'] = $username;
        header("location:DASHBOARD.php");
    }
    else{
        $msg="username or password invalid";
        
    }}


 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" >
    <table align="center">
       
        <tr>
            <th colspan="2"><h2>Login</h2></th>
        </tr>
        <?php if(isset($msg)){?>
            <tr>
              <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
            </tr>
        <?php } ?>
        <tr>
            <td>username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
        </tr>
    </table>
   
</form>

 

</body>
</html>