<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Education World Website</title>
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
	<body id="top">

		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div>
    	<!-- end preloader -->
		
    	<!-- start navigation -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand"><i class="fa fa-graduation-cap"></i> Education World</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">BACK</a></li>
					</ul>
				</div>
			</div>

			<div class=" navbar-default scrollmenu">
			<a href="index.php" class="fa fa-home fa-2x" />			
				<a href="govt.php?option=govt">Government Jobs</a>
				<a href="#news">News</a>
				<a href="#contact">Contact</a>
				<a href="#about">About</a>
				<a href="#support">Support</a>
				<a href="#about">About</a>
     		 </div>

		</nav>
		<!-- end navigation -->
	
    	<!-- start home -->
    	<section id="home">						
<?php
include('blog_main.php');
?>
    	</section>
    	<!-- end home -->
            </div>
          </div>
        </div>

    <!-- start copyright -->
    <footer id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                        Education World &copy; Copyright 2018.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end copyright -->
  </body>

</html>
