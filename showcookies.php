<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doc</title>
</head>
<body>
<h1><?php echo $_COOKIE['name'] ?></h1>
<h1><?php echo $_COOKIE['password'] ?></h1>

<h1><?php echo $_SESSION['name'] ?></h1>
<h1><?php echo $_SESSION['pass'] ?></h1>
<a href="deletecookie.php">Logout</a>
</body>
</html>