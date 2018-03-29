<?php 
require('connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");
$r=mysqli_num_rows($sql);
if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
//image
$imageName=$_FILES['img']['name'];
//encrypt your password
$pass=md5($p);
$query="insert into user values('','$n','$e','$pass','$mob','$gen','$imageName','$dob',now())";
mysqli_query($conn,$query);
//upload image
mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);
$err="<font color='pink'>Registration successfull !!</font>";
}
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>User Registration</title>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/registerstyle.css"></head>

<body>
<div class="form-style">
<form method="post" enctype="multipart/form-data">

	<div class="section">REGISTRATION DETAILS: <?php echo @$err;?></div>
    <div class="inner-wrap">
        <label>Full Name <input  type="text" name="n" required/></label>
		<label>Email Address <input type="email" name="e" required/></label>
		<label>Password <input type="password" name="p" required/></label>
		<label>Phone Number <input type="text" name="mob" required/></label>
		<label >Gender:</label>
			<select name="gen">
			<optgroup>
			<option>Male</option>
			<option>Female</option>
			</optgroup>
			</select>      
			</br>
			<label>Upload your Image <input type="file" name="img"/></label>
			<label>Date of Birth <input type="date" name="dob" required/></label>
			<input type="submit" value="Save" name="save"/>
			<input type="reset" value="Reset"/>
		</div>   	 
</form>
</div>
</body>
</html>
