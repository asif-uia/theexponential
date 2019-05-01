<?php

require_once 'db_connect.php';


$USERNAME = $_POST["userid"];
$PASSWORD = $_POST["passid"];

$passw = md5($PASSWORD);
$cpassw = md5($PASSWORD);


$sql = "SELECT id FROM members where USERNAME = '$USERNAME' and PASSWORD = '$passw' and CPASS = '$cpassw'";

$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);

if($count == 1){
	$_SESSION["username"] = $USERNAME;
	$_SESSION["loggedin"] = true;
	#header('Location: index.php');
	echo "<meta HTTP-EQUIV='REFRESH' content='3; url=index.php'> ";
 }

else {
	echo "ERROR! :" . $sql . "<br>" . mysqli_error($conn);
}


?>

