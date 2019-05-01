<?php require_once 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title>About - THEEXPONENTIAL</title>
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		
    </head>
	<body>
		
		<header id="header">
			<div id="nav">
				<div id="nav-fixed">
					<div class="container">
						<div class="nav-logo">
							<a href="index.php" class="logo">THE<span class="title-span"><strong>EXPONENTIAL</strong></span></a>
						</div>
						
						<ul class="nav-menu nav navbar-nav">
							<li class="cat-1"><a href="blog-post.php">Web Design</a></li>
							<li class="cat-2"><a href="blog-post.php">JavaScript</a></li>
							<li class="cat-3"><a href="blog-post.php">Python</a></li>
							<li class="cat-4"><a href="blog-post.php">PHP</a></li>
						</ul>
						
						
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
						</div>
					</div>
				</div> 


				<div id="nav-aside">
					<!-- nav -->
					<div class="section-row">
						<ul class="nav-aside-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About Us</a></li>
							<li><a href="login.php">
							<?php
           					if(!$_SESSION["username"]){
               			 	echo "<a href = 'login.php'>Login</a>";
            				}
								
										else
                			echo "<a href = 'logout.php'>Logout</a>";
           		?>
							</a></li>
						</ul>
					</div>

					<div class="section-row">
						<h3>Follow us</h3>
						<ul class="nav-aside-social">
							<li><a href="http://facebook.com/asif.auia"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://twitter.com/asif07c"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>

					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
				</div>
			</div>

			<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li>About Us</li>
							</ul>
							<h1>About Us</h1>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="section-row">
							<p>I’m a web developer and graphic designer living in Saidpur. I spend my days with my hands in many different areas of web development from back end programming (PHP, Django/Python, Ruby on Rails) to front end engineering (HTML, CSS, and jQuery/Javascript), digital accessibility, user experience and visual design. Me & my team is extremely passionate about web development and design in all it’s forms and helping small businesses and artisans build and improve their online presence</p>
							
							<p>Get in touch using this form or feel free to email me at info@demo.com. If you are inquiring about working with me on a project, please try to provide a few details about your project if at all possible</p>
						</div>
						<div class="row section-row">
							<div class="col-md-6">
								<figure class="figure-img">
									<img class="img-responsive" src="./img/about-2.jpg" alt="">
								</figure>
							</div>
							<div class="col-md-6">
								<h3>Mission</h3>
								<p>The mission of my team is to provide customer responsive, beautiful & interactive websites. Any proposal may need their </p>
								<ul class="list-style">
									<li><p>Search Engine Optimization..</p></li>
									<li><p>Web Design and Development.</p></li>
									<li><p>Geofencing Marketing.</p></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- aside -->
				</div>
			</div>
		</div>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
