<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doc</title>
</head>
<body>
<form method="POST" action="">
	<label>Username:</label><br>
	<input type="text" name="username"><br>

	<label>Password:</label><br>
	<input type="password" name="userpass"><br><br>

	<label>Remember Me:</label>
	<input type="checkbox" name="remem" value="check">
	<input type="submit" name="btnsub">
</form>
</body>
</html>

<?php 
if (isset($_POST['btnsub'])) 
{
	$name = $_POST['username'];
	$pass = $_POST['userpass'];
	$remember = $_POST['remem'];

	if ($remember=="check") 
	{
		if ($name=="meesum" && $pass=="123") 
		{
			setcookie("name","$name",time()+3600,"/","",0);
			setcookie("password","$pass",time()+3600,"/","",0);
			header("Location:showcookies.php");
		}
		else
		{
			echo "Wrong Username Password";
		}
		
	}
	else
	{
		if ($name=="meesum" && $pass=="123") 
		{
			session_start();
			$_SESSION['name']= $name;
			$_SESSION['pass'] = $pass;
			header("Location:showcookies.php");
		}
		else
		{
			echo "Wrong Username Password";
		}
	}
	/**/
}
 ?>