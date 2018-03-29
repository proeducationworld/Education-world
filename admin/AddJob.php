<?php 
require('../connection.php');
extract($_POST);

if(isset($save))
{
$query="insert into post values('','$category','$title','$b_desc','$pay','$location','$selection','$appfee','$vacancy','$eligible','$ad','$apply','$dop','$dol')";
mysqli_query($conn,$query);
$err="<font color='pink'>Added Job successfully !!</font>";
}
else
{
$err="<font color='pink'>Failed to add job !!</font>";
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Add Job Interface</title>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/registerstyle.css"></head>

<body>
<div class="form-style">
<form method="post" enctype="multipart/form-data">

	<div class="section">Add Job Details: <?php echo @$err;?></div>

    <div class="inner-wrap">
			<label >Category</label>
				<select name="category">
					<optgroup>
						<option>SSC</option>
						<option>UPSC</option>
						<option>INDIAN RAILWAYS</option>
						<option>INDIAN ARMY</option>
						<option>POLICE JOBS</option>
						<option>BANKING JOBS</option>
						<option>TEACHING JOBS</option>
						<option>STATE GOVERNMENT</option>
						<option>INTELLIGENCE BUREAU</option>
						<option>OTHERS</option>
					</optgroup>
				</select> 
			</br>
			
			<label>Title <input type="text" name="title" required/></label>
			<label>Vacancy <input type="text" name="vacancy" required/></label>
			<label>Description <textarea name="b_desc"></textarea></label>
			<label>Pay-Scale <input type="text" name="pay" required/></label>
			<label>Job Location <input type="text" name="location" required/></label>
			<label>Selection Process <textarea name="selection"></textarea></label>
			<label>Application Fees <input type="text" name="appfee" required/></label>
			<label>Eligibility <textarea name="eligible"></textarea></label>
			<label>Detailed Advertisement <input type="text" name="ad" required/></label>
			<label>Online Application Link <input type="text" name="apply" required/></label>
			<label>Start Date <input type="date" name="dop" required/></label>
			<label>Last Date <input type="date" name="dol" required/></label>
			
			<input type="submit" value="Save" name="save"/>
			<input type="reset" value="Reset"/>
		</div>

</form>
</div>

</body>
</html>
