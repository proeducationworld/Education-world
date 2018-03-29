<html>
<head>
<title>Blog Page</title>
<link rel="stylesheet" href="user/css/font-awesome.min.css">
<style>
body
{
padding-top:100px;
}

</style>
</head>

<body>
		<?php 
			require('connection.php');
			$q=mysqli_query($conn, "select * from post ");
			?>

			<h2 style="text-align:center; color:black; padding-top:10px; font-weight:600;">All Government Jobs</h2>	
		
			<?php 
			$i=1;
			while($row=mysqli_fetch_array($q))
			{
				$id= $row['id'];
			?>

<div class="card">
   <h3><?php echo $row['id'];?> : <?php echo $row['title'];?></h3>
  <p class="title" style="padding-left:25px; font-weight:600;"><i class="fa fa-calendar"></i> Last Date : <?php echo $row['dol'];?></p>
  <p class="title-last" style="padding-right:25px; font-weight:600;"><i class="fa fa-calendar"></i> Start Date : <?php echo $row['dop'];?></p>
  <p class="title-p" style="color:black; padding-left:25px; padding-right:25px; font-weight:600;"><i class="fa fa-graduation-cap"></i> Eligibility :</p>
  <p class="title-p" style="color:black; padding-left:25px; padding-right:25px; font-weight:600;"><?php echo $row['eligible'];?><p>
 <p><button class="newbutton"><a href="detail.php?cid=<?php echo $id; ?>" style="color:white;">Read More</a></button></p>
</div>
&nbsp
		<?php 
			$i++;
			}
		?>
	
<script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>		
</body>
</html>			
