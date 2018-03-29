<?php 
extract($_POST);
if(isset($update))
{

$query="update user set name='$n',mobile='$mob', dob='$dob' where email='".$_SESSION['user']."'";

//$query="insert into user values('','$n','$e','$pass','$mob','$gen', $imageName','$dob',now())";
mysqli_query($conn,$query);

$err="<font color='pink'>Profie updated successfully !!</font>";
}

//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);

?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Update Profile</title>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/registerstyle.css"></head>

</head>

<body>

<div class="form-style">

<form method="post" >

	<div class="section"> Update Profile: <?php echo @$err;?></div>

    <div class="inner-wrap">
        <label>Full Name <input  type="text" value="<?php echo $res['name'];?>" name="n" required/></label>
		<label>Email Address <input type="email" readonly="true" value="<?php echo $res['email'];?>" name="e" required/></label>
		<label>Phone Number <input type="text" name="mob"  value="<?php echo $res['mobile'];?>" required/></label>
			<label>Date of Birth <input type="date" value="<?php echo $res['dob'];?>" name="dob" required/></label>
			<input type="submit" value="Update My Profile" name="update"/>
			<input type="reset" value="Reset"/>
		</div>

    	 
</form>
</div>

</body>
</html>




