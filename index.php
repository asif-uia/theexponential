<?php include_once 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Exponential - Private Blog</title>

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

						if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
							echo "<li><a href='blog-post.php'>Blog Post</a></li>";
						} else {
							echo "";
						}

						?>
						<li><a href="about.php">About Us</a></li>
						<li>
							<?php
								if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
									echo "<a href = 'logout.php'>Logout</a>";
								} else {
									echo "<a href = 'login.php'>Login</a>";
								}
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
				<div class="col-md-6">
					<div class="post post-thumb">
						<a class="post-img"><img src="./img/default-post.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-2" href="javascript.php">JavaScript</a>
							</div>
							<h3 class="post-title"><a>
									<?php

									$str = "SELECT * FROM javascript where id = 1";
									$result = mysqli_query($conn, $str);

									while ($row = mysqli_fetch_assoc($result)) {
										echo "<a href='blog-post-javascript.php?id=".$row['id']."'>" .$row["TITLE"]. "</a>";
									}

									?>
								</a></h3>
						</div>
					</div>
				</div>



				<div class="col-md-6">
					<div class="post post-thumb">
						<a class="post-img"><img src="./img/default-post.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-1" href="webdesign.php">WEB DESIGN</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">
									<?php

									$str = "SELECT * FROM webdesign where id = 7";
									$result = mysqli_query($conn, $str);

									while ($row = mysqli_fetch_assoc($result)) {
										echo "<a href='blog-post-webdesign.php?id=".$row['id']."'>" .$row["TITLE"]. "</a>";
									}

									?>
								</a></h3>
						</div>
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Recent Posts</h2>
					</div>
				</div>


				<div class="col-md-4">
					<div class="post">
						<a class="post-img"><img src="./img/default-post.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-3" href="php.php">PHP</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">
									<?php

									$str = "SELECT * FROM php where id = 4";
									$result = mysqli_query($conn, $str);

									while ($row = mysqli_fetch_assoc($result)) {
										echo "<a href='blog-post-php.php?id=".$row['id']."'>" .$row["TITLE"]. "</a>";
									}

									?>

								</a></h3>
						</div>
					</div>
				</div>


				<div class="col-md-4">
					<div class="post">
						<a class="post-img"><img src="./img/default-post.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-2" href="javascript.php">JavaScript</a>
							</div>
							<h3 class="post-title"><a href="#">
									<?php

									$str = "SELECT * FROM javascript where id = 2";
									$result = mysqli_query($conn, $str);

									while ($row = mysqli_fetch_assoc($result)) {
										echo "<a href='blog-post-javascript.php?id=".$row['id']."'>" .$row["TITLE"]. "</a>";
									}

									?>
								</a></h3>
						</div>
					</div>
				</div>



				<div class="col-md-4">
					<div class="post">
						<a class="post-img"><img src="./img/default-post.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-4" href="python.php">Python</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">
									<?php

									$str = "SELECT * FROM python where id = 8";
									$result = mysqli_query($conn, $str);

									while ($row = mysqli_fetch_assoc($result)) {
										echo "<a href='blog-post-python.php?id=".$row['id']."'>" .$row["TITLE"]. "</a>";
									}

									?>
								</a></h3>
						</div>
					</div>
				</div>


				<div class="clearfix visible-md visible-lg"></div>


				<div class="col-md-4">
					<div class="post">
						<a class="post-img"><img src="./img/default-post.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-2" href="javascript.php">JavaScript</a>
							</div>
							<h3 class="post-title"><a href="#">
									<?php

									$str = "SELECT * FROM javascript where id = 3";
									$result = mysqli_query($conn, $str);

									while ($row = mysqli_fetch_assoc($result)) {
										echo "<a href='blog-post-javascript.php?id=".$row['id']."'>" .$row["TITLE"]. "</a>";
									}
									?>
								</a></h3>
						</div>
					</div>
				</div>


				<div class="col-md-4">
					<div class="post">
						<a class="post-img"><img src="./img/default-post.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-4" href="python.php">Python</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">
									<?php

									$str = "SELECT * FROM python where id = 1";
									$result = mysqli_query($conn, $str);

									while ($row = mysqli_fetch_assoc($result)) {
										echo "<a href='blog-post-python.php?id=".$row['id']."'>" .$row["TITLE"]. "</a>";
									}

									?>
								</a></h3>
						</div>
					</div>
				</div>


				<div class="col-md-4">
					<div class="post">
						<a class="post-img"><img src="./img/default-post.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-1" href="webdesign.php">Web Design</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">
									<?php

									$str = "SELECT * FROM webdesign where id = 5";
									$result = mysqli_query($conn, $str);

									while ($row = mysqli_fetch_assoc($result)) {
										echo "<a href='blog-post-webdesign.php?id=".$row['id']."'>" .$row["TITLE"]. "</a>";
									}
									
									?>
								</a></h3>
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