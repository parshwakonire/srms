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
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Admin</title>
<link rel="icon" type="image/x-icon" href="images/fav.png" />
<style>@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap');

:root{
  --accent-color:#FCA681;
  --gradient-color:#3BB0A8;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
}
body{
    background:linear-gradient(to left, var(--accent-color), var(--gradient-color));    /* background-size: cover; */
    width: 100%;
    height: auto;

}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    position: relative;
}
.box{
    width: 500px;
    height: 550px;
    background: #fff;
    backdrop-filter: blur(20px);
    border-radius: 30px;
    padding: 40px;
    box-shadow: 2px 2px 15px 2px rgba(0,0,0,0.1),
                -2px -0px 15px 2px rgba(0,0,0,0.1);
    z-index: 10;
}
.wrapper{
    position: absolute;
    width: 510px;
    height: 550px;
    border-radius: 30px;
    background: rgba(255,255,255,0.53);
    box-shadow: 2px 2px 15px 2px rgba(0,0,0,0.115),
                -2px -0px 15px 2px rgba(0,0,0,0.054);
    transform: rotate(5deg);
}
.header{
    margin-bottom: 50px;
}
.header header{
    display: flex;
    justify-content: right;
}
header img{
    width: 25px;
}
.header p{
    font-size: 25px;
    font-weight: 800;
    margin-top: 40px;
}
.input-box{
    display: flex;
    flex-direction: column;
    margin: 10px 0;
    position: relative;
}
i{
    font-size: 22px;
    position: absolute;
    top: 35px;
    right: 12px;
    color: #595b5e;
}
input{
    height: 40px;
    border: 2px solid rgb(153,157,158);
    border-radius: 7px;
    margin: 7px 0;
    outline: none;
    padding: 20px;
}
.input-field{
    font-weight: 500;
    padding: 0 10px;
    font-size: 17px;
    color: #333;
    background: transparent;
    transition: all .3s ease-in-out;
}
.input-field:focus{
    border:2px solid rgb(89,53,180);
}
.input-field:focus ~ i{
    color: rgb(89,53,180);
}
.login{
    margin-top: 20px;
    background:linear-gradient(to left, var(--accent-color), var(--gradient-color));    /* background-size: cover; */

    border: none;
    color: #fff;
    cursor: pointer;
    transition: all .3s ease-in-out;
}
.login:hover{
    background:linear-gradient(to left, var(--accent-color), var(--gradient-color));    /* background-size: cover; */

	color: black;
}
.bottom{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-top: 45px;
}
.bottom span a{
    color: #727374;
    text-decoration: none;
}
.bottom span a:hover{
    text-decoration: underline;
}</style>
</head>

<body>
<div class="container">
       <div class="box">
        <div class="header">
            
            <p align="center">Admin Login</p>
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