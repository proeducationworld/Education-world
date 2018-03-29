<?php
	include('connection.php');
	session_start();
	extract($_POST);
	if(isset($login))
	{
		$que=mysqli_query($conn,"select * from admin where user='$email' and pass='$pass'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
				$_SESSION['admin']=$email;
				header('location:admin/index.php');
			}
		else
			{
				$err="<font color='red'>Wrong Email or Password !</font>";
			}
	}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin Login Page</title>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/registerstyle.css">

</head>


<body>
<strong></strong>
<div class="form-style">
<form method="post" enctype="multipart/form-data">

	<div class="section"> Administrator Login: <?php echo @$err;?></div>

    <div class="inner-wrap">
		<label>Email Address <input type="email" name="email"></label>
		<label>Password <input type="password" name="pass" required/></label>
    <label>Remember Password <input class="form-check-input" type="checkbox" ></label>
    <input name="login" type="submit" value="Login"/>
			<input type="reset" value="Reset"/>
		</div>    	 
</form>
</div>

</body>
</html>

          