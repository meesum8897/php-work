<?php 
$id = $_GET['id'];
$con = mysqli_connect("localhost","root","","crudd");
$query = "select * from users where id='$id'";
$result = mysqli_query($con,$query);

while ($row=mysqli_fetch_array($result)) 
{


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doc</title>
</head>
<body>
<form method="POST" action="" enctype="multipart/form-data">
	<label>Username</label><br>
	<input type="text" name="txtname" value="<?php echo $row['username'] ?>"><br>

	<label>Email</label><br>
	<input type="email" name="txtemail" value="<?php echo $row['email'] ?>"><br>

	<input type="submit" name="btnsub">
</form>
</body>
</html>

<?php 
}
if (isset($_POST['btnsub'])) 
{

$name = $_POST['txtname'];
$email = $_POST['txtemail'];

$upquery = "update users set username='$name', email='$email' where id='$id'";

$result = mysqli_query($con,$upquery);

if ($result>0) 
{
	echo "<script>alert('Updated.!!');
	window.location.href='users.php';
	</script>";
}
else
{
	echo "<script>alert('Error')</script>";
}
}


?>