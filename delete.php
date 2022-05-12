<?php 
$id = $_GET['id'];

$con = mysqli_connect("localhost","root","","crudd");
$query = "delete from users where id=$id";
$result = mysqli_query($con,$query);

if ($result>0) 
{
	header("Location:users.php");
}
else
{
	die("Error");
}

 ?>
