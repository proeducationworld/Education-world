<?php 
$user= $_SESSION['user'];
extract($_POST);
if(isset($update))
{
$img=$_FILES['f']['name'];
echo $img; 

$query="update user set image='$img' where email='".$_SESSION['user']."'";
mysqli_query($conn,$query);

move_uploaded_file($_FILES['f']['tmp_name'],"../images/$user/".$_FILES['f']['name']);

$err="<font color='pink'>Profie Pic updated successfully !!</font>";

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
<link rel="stylesheet" href="../css/registerstyle.css">

</head>

<body>

	<div class="form-style">

		<form method="post" enctype="multipart/form-data">

			<div class="section"> Update Profile: <?php echo @$err;?></div>

			<div class="inner-wrap">
				<label>Full Name <input type="file" name="f"/></label>
				
				<input type="submit" value="Update My Profile Pic" name="update"/>
				<input type="reset" value="Reset"/>
			</div>

				
		</form>
	</div>
</body>
</html>
