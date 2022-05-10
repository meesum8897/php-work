<?php 
session_start();

if (isset($_SESSION['em'])=="") {
	header("location:login.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doc</title>
</head>
<body>
<h1>Hello World</h1>

<form method="POST" action="">
	<input type="submit" value="Logout" name="btnlogout" >
</form>

<h3><?php echo $_SESSION['em'] ?></h3>
</body>
</html>

<?php 
if (isset($_POST['btnlogout'])) 
{	
	unset($_SESSION['em']);
	session_destroy();
	session_unset();

	header("location:login.php");
}
 ?>