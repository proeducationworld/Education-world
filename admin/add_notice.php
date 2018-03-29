<?php 
extract($_POST);
if(isset($add))
{

	if($details=="" || $sub=="" || $user=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		foreach($user as $v)
		{
mysqli_query($conn,"insert into notice values('','$v','$sub','$details',now())");
		}
		
		$err="<font color='green'>Notice added Successfully</font>";	
	}
}

?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>User Registration</title>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/registerstyle.css"></head>

<body>
<div class="form-style">
<form method="post" enctype="multipart/form-data">

	<div class="section">Add New Notice: <?php echo @$err;?></div>

    <div class="inner-wrap">
        <label>Enter the Topic <input type="text" name="sub" required="required" /></label>
		<label>Enter Details <textarea name="details"></textarea></label>
		
		<label>Password 
		<select name="user[]" multiple="multiple">
			<?php 
				$sql=mysqli_query($conn,"select name,email from user");
				while($r=mysqli_fetch_array($sql))
				{
					echo "<option value='".$r['email']."'>".$r['name']."</option>";
				}
			?>
		</select>
		</label>
		
		<input type="submit" value="Add New Notice" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>

</form>
</div>

</body>
</html>



