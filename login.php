<?php
include('connection.php');
session_start();
extract($_POST);
if(isset($save))
{
	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$pass=md5($p);	
$sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");
$r=mysqli_num_rows($sql);
if($r==true)
{
$_SESSION['user']=$e;
header('location:user/index.php');
}
else
{
$err="<font color='red'>Invalid login details</font>";
}
}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login Form</title>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/registerstyle.css">
</head>

<body>
<strong></strong>
<div class="form-style">
<form method="post" enctype="multipart/form-data">

	<div class="section">Login Details: <?php echo @$err;?></div>

    <div class="inner-wrap">
		<label>Email Address <input type="email" name="e"></label>
		<label>Password <input type="password" name="p" required/></label>
    <label>Remember Password <input class="form-check-input" type="checkbox" ></label>
      <input type="submit" value="Save" name="save"/>
			<input type="reset" value="Reset"/>
			<a style="color:black;" href="index.php?option=admin">Administrator Login</a>
             <a href="#0"> Forgot Password?</a>			 
		</div>    	 
</form>
</div>
</body>
</html>

          
        
