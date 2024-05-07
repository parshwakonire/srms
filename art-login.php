<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM arts WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard - arts.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Arts Department</title>
<link rel="icon" type="image/x-icon" href="images/fav.png" />
<link rel="stylesheet" href="css/login.css">
</head>
<style>
    body{
    background:url(images/binoculars-magnifying-glass-map_23-2147770898.jpg);
    backdrop-filter: blur(5px);
    background-size: cover;
}
</style>

<body>
<div class="container">
       <div class="box">
        <div class="header">
            
            <p>Welcome to Arts Department</p>
        </div>
		<form  method="post">
        <div class="input-box">
            <label for="email">UserName</label>
			<input type="text" name="username" class="name" placeholder="" required="">
            
            <i class="bx bx-envelope"></i>
        </div>

        <div class="input-box">
            <label for="pass">Password</label>
			<input type="password" name="password" class="password" placeholder="" required="">
            
            <i class="bx bx-lock"></i>
        </div>

        <div class="input-box">
		<input type="submit" class="login" name="login" value="Sign In">
           
        </div>
		</form>
        <div class="bottom">
			<span><a href="about.html">Forgot Password?</a></span>
            <span><a href=".">Home</a></span>
        </div>
        
       </div>
       <div class="wrapper"></div>
    </div>
</body>
</html>
