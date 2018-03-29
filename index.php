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

        <!-- start header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <p style="font-weight:600;"><i class="fa fa-phone"></i><span> Phone </span>+91 98880 62945</p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <p style="font-weight:600;"><i class="fa fa-envelope-o"></i><span> Email </span><a href="mailto:sujeet.genius@gmail.com">sujeet.genius@gmail.com</a></p>
                    </div>
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <ul class="social-icon">
                            <li><span style="font-weight:600;">Meet us on</span></li>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="index.php?option=New_user" >REGISTER</a></li>
					        <li><a href="index.php?option=login">LOGIN</a></li>
							<li><a href="index.php" class="fa fa-home fa-2x" style="font-size:35px;color:#17202A;"></a></li>
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
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand"><i class="fa fa-graduation-cap"></i> Education World</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top">HOME</a></li>
						<li><a href="#about">ABOUT</a></li>
						<li><a href="#team">TEAM</a></li>
						<li><a href="#contact">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->

    	<!-- start home -->
    	<section id="home">
    		<div class="container">
<?php 
@$opt=$_GET['option'];
if($opt!="")
{		
if($opt=="New_user")
{
include('registration.php');
}	
else if($opt=="login")
{
include('login.php');
}
else if($opt=="admin")
{
include('admin_login.php');
}

}
else
{
include('fullmenu.php');
}
?>
    		</div>
    	</section>
    	<!-- end home -->

    	<!-- start about -->
		<section id="about">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">WE ARE <span>EDUCATION WORLD</span></h2>
    				</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-mobile"></i>
								</div>
								<h3 class="media-heading">LATEST UPDATES AND NOTIFICATIONS</h3>
							</div>
							<div class="media-body">
								<p>Best Services</p>
							</div>
						</div>
					</div>
				
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-comment-o"></i>
								</div>
								<h3 class="media-heading">FREE 24 X 7 CUSTOMER SUPPORT</h3>
							</div>
							<div class="media-body">
								<p>Best Services</p>
							</div>
						</div>
					</div>
				
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-html5"></i>
								</div>
								<h3 class="media-heading">STUDY MATERIALS & USEFUL LINKS</h3>
							</div>
							<div class="media-body">
								<p>Best Services</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end about -->

    	<!-- start team -->
    	<section id="team">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>EDUCATION WORLD</span> TEAM</h2>
    				</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="card">
							<img src="webimages/member-1.jpg" alt="pic" style="width:100%">
							<h1>Mamta Sharma</h1>
							<p class="title-last">- Front End Developer</p>
							<p style="font-weight:600;">" What separates design from art is that design is meant to be functional....." </p>
								<div style="margin: 24px 0;">
									<a href="#"><i class="fa fa-twitter fa-2x"></i></a>  
									<a href="#"><i class="fa fa-linkedin fa-2x"></i></a>  
									<a href="#"><i class="fa fa-facebook fa-2x"></i></a> 
								</div>
							   <p><button class="newbutton">Contact</button></p>
						  </div>		  
    				</div>
					<p>&nbsp</p>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
						<div class="card">
							<img src="webimages/arjun.jpg" alt="pic" style="width:100%">
							<h1>Arjun Kumar</h1>
							<p class="title-last">- PHP Developer</p>
							<p style="font-weight:600;">" Intuitive Design is how we give the useer new superpowers. Create your own visual style....." </p>
								<div style="margin: 24px 0;">
									<a href="#"><i class="fa fa-twitter fa-2x"></i></a>  
									<a href="#"><i class="fa fa-linkedin fa-2x"></i></a>  
									<a href="#"><i class="fa fa-facebook fa-2x"></i></a> 
								</div>
							<p><button class="newbutton">Contact</button></p>
						</div>
					</div>
					<p>&nbsp</p>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
						<div class="card">
							<img src="webimages/admin.jpg" alt="pic" style="width:100%">
							<h1>Sujeet Kumar</h1>
							<p class="title-last">- Database Administrator</p>
							<p style="font-weight:600;">" Website serves you 24 X 7 : I'm sure that no employee will do that for you....." </p>
								<div style="margin: 24px 0;">
									<a href="#"><i class="fa fa-twitter fa-2x"></i></a>  
									<a href="#"><i class="fa fa-linkedin fa-2x"></i></a>  
									<a href="#"><i class="fa fa-facebook fa-2x"></i></a> 
								</div>
							<p><button class="newbutton">Contact</button></p>
						</div>
					</div>
					<p>&nbsp</p>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
						<div class="card">
							<img src="webimages/lpu.jpeg" alt="pic" style="width:100%">
							<h1>Lovely Professional University</h1>
							<p class="title-last">- Guidance Support</p>
								<div style="margin: 24px 0;">
									<a href="#"><i class="fa fa-twitter fa-2x"></i></a>  
									<a href="#"><i class="fa fa-linkedin fa-2x"></i></a>  
									<a href="#"><i class="fa fa-facebook fa-2x"></i></a> 
								</div>
							<p><button class="newbutton">Contact</button></p>
						</div>
					</div>
				</div>
    		</div>
    	</section>
    	<!-- end team -->


    	<!-- start contact -->
    	<section id="contact">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT <span>EDUCATION WORLD</span></h2>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
    					<form action="#" method="post">
    						<label>NAME</label>
    						<input name="fullname" type="text" class="form-control" id="fullname">   						  	
                            <label>EMAIL</label>
    						<input name="email" type="email" class="form-control" id="email">
                            <label>MESSAGE</label>
    						<textarea name="message" rows="4" class="form-control" id="message"></textarea>
                            <input type="submit" name="save" Value="Save" class="form-control">
    					</form>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
    					<address>
    						<p class="address-title">OUR ADDRESS</p>
    						<span>Visit us at: </span>
    						<p><i class="fa fa-phone"></i> +91 98880 62945</p>
    						<p><i class="fa fa-envelope-o"></i> sujeet.genius@gmail.com</p>
    						<p><i class="fa fa-map-marker"></i> Lovely Professional University, NH-95, Phagwara, Punjab </p>
    						

    					</address>
    					<ul class="social-icon">
    						<li><h4>WE ARE SOCIAL</h4></li>
    						<li><a href="#" class="fa fa-facebook"></a></li>
    						<li><a href="#" class="fa fa-twitter"></a></li>
    						<li><a href="https://www.youtube.com/channel/UC4yzoGuKkCL_8FzI-B-x83A" class="fa fa-youtube"></a></li>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end contact -->
        <!-- start copyright -->
        <footer id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                        Education World @ Copyright 2018</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end copyright -->
	</body>
</html>