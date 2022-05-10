<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doc</title>
</head>
<body>
<form method="POST" action="">

	<label>Email</label><br>
	<input type="email" name="txtemail"><br>

	<label>Password</label><br>
	<input type="password" name="txtpass"><br>

	<input type="submit" name="btnsub">
</form>
</body>
</html>

<?php 
session_start();

if (isset($_POST['btnsub'])) 
{
	echo $email = $_POST['txtemail'];
	echo $pass = md5($_POST['txtpass']);

	$_SESSION["em"] = $email;

	$con = mysqli_connect("localhost","root","","crudd");

	$query = "select * from users where email = '$email' AND password ='$pass'";
	$result = mysqli_query($con,$query);

	if (mysqli_fetch_array($result)) 
	{
		header("Location:index.php");
	}
	else
	{
		echo "<script>alert('Email password incorrect')</script>";
	}



}
 ?>
