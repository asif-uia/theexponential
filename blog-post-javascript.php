<?php require_once "db_connect.php";

if ($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM javascript WHERE id = {$id}";
	$result = mysqli_query($conn, $sql);

	$data =  mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>JavaScript Blog - THEEXPONENTIAL</title>

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css" />

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
						<li class="cat-1"><a href="webdesign.php">Web Design</a></li>
						<li class="cat-2"><a href="javascript.php">JavaScript</a></li>
						<li class="cat-3"><a href="python.php">Python</a></li>
						<li class="cat-4"><a href="php.php">PHP</a></li>
					</ul>


					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
					</div>
				</div>
			</div>


			<div id="nav-aside">
				<div class="section-row">
					<ul class="nav-aside-menu">
						<li><a href="index.php">Home</a></li>
						<?php
						if (!is_null($_SESSION["username"])) {
							echo "<li><a href='blog-post.php'>Blog Post</a></li>";
						}

						?>
						<li><a href="about.php">About Us</a></li>
						<li>
							<?php
							if (!$_SESSION["username"]) {
								echo "<a href = 'login.php'>Login</a>";
							} else
								echo "<a href = 'logout.php'>Logout</a>";
							?>
						</li>
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

		<div id="post-header" class="page-header">
			<div class="background-img" style="background-image: url('./img/post-page.jpg');"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-meta">
							<a class="post-category cat-2" href="javascript.php">JAVASCRIPT</a>
						</div>
						<h1>
							<?php
							echo "" . $data["TITLE"];
							?>
						</h1>
					</div>
				</div>
			</div>
			<div class="aside-widget">
					<div class="section-title">
						<h2>Categories</h2>
					</div>
					<div class="category-widget">
						<ul>
							<li><a href="webdesign.php" class="cat-1">Web Design<span>
										<?php
										$sql = "SELECT * FROM webdesign";
										$result = mysqli_query($conn, $sql);

										$count = mysqli_num_rows($result);
										echo $count;

										?>
									</span></a></li>
							<li><a href="javascript.php" class="cat-2">JavaScript<span>

										<?php
										$sql = "SELECT * FROM javascript";
										$result = mysqli_query($conn, $sql);

										$count = mysqli_num_rows($result);
										echo $count;

										?>

									</span></a></li>
							<li><a href="python.php" class="cat-4">Python<span>

										<?php
										$sql = "SELECT * FROM python";
										$result = mysqli_query($conn, $sql);

										$count = mysqli_num_rows($result);
										echo $count;

										?>

									</span></a></li>
							<li><a href="php.php" class="cat-3">PHP<span>

										<?php
										$sql = "SELECT * FROM php";
										$result = mysqli_query($conn, $sql);

										$count = mysqli_num_rows($result);
										echo $count;

										?>

									</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>


	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="section-row sticky-container">
						<div class="main-post">
							<h3>
								<?php
								echo "" . $data["TITLE"];
								?>
							</h3>
							<p>
								<?php
								echo "" . $data["QUES"];
								?>
							</p>
						</div>
						<div class="post-shares sticky-shares">
							<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="index.php" class="logo">THE<span class="title-span"><strong>EXPONENTIAL</strong></span></a>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="row">
						<div class="col-md-6">
							<div class="footer-widget">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="webdesign.php">Web Design</a></li>
									<li><a href="javascript.php">JavaScript</a></li>
									<li><a href="python.php">Python</a></li>
									<li><a href="php.php">PHP</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="footer-widget">
						<ul class="footer-social">
							<li><a href="http://facebook.com/asif.auia"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://twitter.com/asif07c"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>