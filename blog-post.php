<?php require_once 'db_connect.php'; ?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Post on BLOG - THEEXPONENTIAL</title>

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet prefetch">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css" />


	<script src="signup.js"></script>

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
						<li class="cat-3"><a href="php.php">PHP</a></li>
						<li class="cat-4"><a href="python.php">Python</a></li>
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
						<li><a href="about.php">About Us</a></li>
						<li><a href="login.php">
								<?php
								if (!$_SESSION["username"]) {
									echo "<a href = 'login.php'>Login</a>";
								} else
									echo "<a href = 'logout.php'>Logout</a>";
								?>
							</a></li>
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
				<div class="section-row">
					<div class="section-title">
						<h2>Ask A Question </h2>
						<p>Required fields are marked in *</p>
					</div>
					<form name="askform" class="post-reply" onsubmit="return aValidation()" action="post_db.php" method="post">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<span>Title *</span>
									<input class="input" type="text" name="title">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<span>Category</span>
									<select name="cat" class="form-control" id="sel1">
										<option>WebDesign</option>
										<option>JavaScript</option>
										<option>Python</option>
										<option>PHP</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="input" name="message" placeholder="Enter Description"></textarea>
								</div>
								<button class="primary-button">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>