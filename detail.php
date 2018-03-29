<?php
require('connection.php');
$id= $_REQUEST['cid'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Awesome Responsive Website</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style.css">		
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/typed.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/custom.js"></script>
	</head>
	
	<header>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-4 col-xs-12">
				<p style="font-weight:600;"><i class="fa fa-phone"></i><span> Phone</span>+91 98880 62945</p>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12">
				<p><i class="fa fa-envelope-o"></i> &nbsp<a href="mailto:sujeet.genius@gmail.com">sujeet.genius@gmail.com</a></p>
			</div>
			<div class="col-md-6 col-sm-4 col-xs-12">
				<ul class="social-icon">
                    <li><span>Meet us on</span></li>
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-instagram"></a></li>
					<li><a href="index.php?option=New_user" >REGISTER</a></li>
			        <li><a href="index.php?option=login">LOGIN</a></li>
					<li><a href="index.php" class="fa fa-home fa-2x" ></a></li>
				</ul>
			</div>					
		</div>
	</div>
</header>
<!-- end header -->

<!-- start navigation -->
		<nav class="navbar navbar-default templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">			
                    <a href="#" class="navbar-brand"><i class="fa fa-graduation-cap"></i> Education World</a>
				</div>
			</div>
		</nav>
				
		<div class="background">
			<div class="transbox">        
				<?php
					$sql= mysqli_query($conn,"select * from post where id='".$id."'");
					while($row= mysqli_fetch_array($sql))
					{
					?>

					<!-- Title -->
					<h1 class="mt-4" align="center"><?php echo $row['title'];?></h1>

					<!-- Date/Time -->
					<p class="title"><i class="fa fa-calendar"></i> Start Date : <?php echo $row['dol'];?></p>
					<p class="title-last"><i class="fa fa-calendar"></i> Last Date : <?php echo $row['dol'];?></p>

					<!-- Post Content -->
					<h3><i class="fa fa-indent"></i> Basic Description</h3>
								<p style="font-size:15px; font-weight:600; padding-left:25px;padding-right:25px;"><?php echo $row['b_desc'];?></p>
								<h3 class="head"><i class="fa fa-inr"></i> Pay scale : Rs. <?php echo $row['pay'];?></h3>
								<h3 class="head"><i class="fa fa-map-marker"></i> Job Location : <?php echo $row['location'];?></h3>
								<p></p>
								<h3><i class="fa fa-forward"></i> Selection Process</h3>
								<p style="font-size:15px; font-weight:600; padding-left:25px;padding-right:25px;"><?php echo $row['selection'];?></p>
								<h3 class="head"><i class="fa fa-inr"></i> Application Fees : Rs. <?php echo $row['appfee'];?></h3>

								<h3><i class="fa fa-calendar"></i> Last Date to Apply: <?php echo $row['dol'];?></h3>
								<h3 style="text-align:center;"><a href="<?php echo $row['apply'];?>" class="mt-4">Click Here To Apply Online</a></h3>
								<h3 style="text-align:center;"><a href="<?php echo $row['ad'];?>">Click Here To Download Official Advertisement</a></h3>
					<?php 
						}
					?>
                </div>
			</div>
			
			
        <!-- start copyright -->
        <footer id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>Education World &copy; Copyright 2018. Designed By Sujeet & Mamta</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end copyright -->

		</body>
	</html>
				
