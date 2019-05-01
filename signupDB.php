<?php   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$conn = mysqli_connect($servername, $username, $password, $dbname );

if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}
$USERNAME = $_POST["username"];
$PASSWORD = $_POST["password"];
$CPASS = $_POST["cpass"];

$passw = md5($PASSWORD);
$cpassw = md5($CPASS);

$sql = "INSERT INTO members (USERNAME,PASSWORD,CPASS) values ('$USERNAME', '$passw', '$cpassw')";


if(mysqli_query($conn,$sql)){
	echo "New Record Created Successfully!";
	echo "<meta HTTP-EQUIV='REFRESH' content='3; url=index.php'> ";
}
else {
	echo "ERROR! :" . $sql . "<br>" . mysqli_error($conn);

}

mysqli_close($conn);

echo "<meta HTTP-EQUIV='REFRESH' content='3; url=index.php'> ";
?>
