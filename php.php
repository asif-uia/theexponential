<?php require_once 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Blog - THEEXPONENTIAL</title>

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
							//echo "<a href = 'logout.php'>Logout</a>";
							echo "<li><a href='blog-post.php'>Blog Post</a></li>";
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
	<div style="font-size : 20px; margin-left:10%;">
	<h3 style="color:darkviolet; font-family:comic sans ms;"><br>POSTS</h3><br>

<?php


$sql = "SELECT * FROM php";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo  "<br><br><a href='blog-post-php.php?id=".$row['id']."'>" .$row["TITLE"]. "</a><br><hr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 

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