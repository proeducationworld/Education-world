<?php 
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update notice set subject='$sub',Description='$details' where notice_id='".$_GET['notice_id']."'");
$err="<font color='blue'>Notice updated </font>";

}

//select old notice 
$q=mysqli_query($conn,"select * from notice where notice_id='".$_GET['notice_id']."'");
$res=mysqli_fetch_array($q);

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

	<div class="section">Update Notice: <?php echo @$err;?></div>

    <div class="inner-wrap">
        <label>Enter the Topic <input type="text" name="sub" value="<?php echo $res['subject']; ?>" /></label>
		<label>Enter Details <textarea name="details"><?php echo $res['Description']; ?></textarea></label>
		
		<label>Users 
				<select name="user[]" multiple="multiple" class="form-control">
					<?php 
						$sql=mysqli_query($conn,"select name,email from user");
						while($r=mysqli_fetch_array($sql))
						{
							echo "<option value='".$r['email']."'>".$r['name']."</option>";
						}
					?>
				</select>
		</label>
		
		<input type="submit" value="Update Notice" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>

</form>
</div>

</body>
</html>
