<?php 
extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$op=md5($op);	

$sql=mysqli_query($conn,"select * from user where pass='$op'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	$np=md5($np);
	$sql=mysqli_query($conn,"update user set pass='$np' where email='$user'");
	
	$err="<font color='pink'>Password updated </font>";
	}
	else
	{
	$err="<font color='red'>New  password not matched with Confirm Password </font>";
	}
}

else
{

$err="<font color='red'>Wrong Old Password </font>";

}
}
}

?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Update Profile</title>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/registerstyle.css">
</head>

<body>

<div class="form-style">

<form method="post" >

	<div class="section"> Update Password : <?php echo @$err;?></div>

    <div class="inner-wrap">
        <label>Enter Your Old Password <input type="password" name="op"/></label>
		<label>Enter Your New Password <input type="password" name="np"/></label>		
		<label>Confirm New Password <input type="password" name="cp"/></label>	
		<input type="submit" value="Update Password" name="save"/>
		<input type="reset" value="Reset"/>
	
	</div>
 	 
</form>
</div>

</body>
</html>

