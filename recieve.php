<?php
$method = $_SERVER["REQUEST_METHOD"];
if($method == "POST")
{
	$server = "us-cdbr-iron-east-01.cleardb.net";
	$username = "b58baa02f9ab8a";
	$password = "797139ad";
	$db = "heroku_ea07ab03ff13442";
    $conn = new mysqli($server, $username, $password, $db);
	mysqli_query($conn, "SET NAMES utf8");
	
	$name = $_POST["name"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	//echo $name." ".$lastname." ".$email;
	$sql = "INSERT INTO tbl_kkm(name,lastname,email) VALUES('$name','$lastname','$email')";
	$result = mysqli_query($conn, $sql) or trigger_error($conn->error."[$sql_insert]");
	echo '<script type="text/javascript">';
	echo 'window.location.href="insert_kkm.php";';
	echo '</script>';
}
else
{
	echo "Method Not Allow!!!!";
}
?>