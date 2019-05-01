<?php   

require_once 'db_connect.php';

$TITLE = $_POST["title"];
$CAT = $_POST["cat"];
$QUES = $_POST["message"];


$sql = "INSERT INTO $CAT (TITLE,QUES) values ('$TITLE','$QUES')";


if(mysqli_query($conn,$sql)){
	echo "New Record Created Successfully!";
}
else {
	echo "ERROR! :" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

echo "<meta HTTP-EQUIV='REFRESH' content='3; url=blog-post.php'> ";
?>
