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
	<input type="text" name="txtname" pattern="[A-Za-z0-9_]{6,10}" title="You can use Character,numbers and underscore (_)" required><br>

	<label>Email</label><br>
	<input type="email" name="txtemail" pa ttern="[a-z0-9_.]{8,15}@[a-z]{5,8}.[a-z]{2,3}" title="Email Should be like example_123@gmail.com" required><br>

	<label>Password</label><br>
	<input type="password" name="txtpass" required><br>

	<label>image</label>
	<input type="file" name="img" required accept=".jpg,.png.jpeg"><br>

	<input type="submit" name="btnsub">
</form>
</body>
</html>

<?php 
	if (isset($_POST['btnsub'])) {
		$name = $_POST['txtname'];
		$email = $_POST['txtemail'];
		$pass = md5($_POST['txtpass']);
		$img = $_FILES['img']['name'];

		/*Data Base Connection*/

		$con = mysqli_connect("localhost","root","","crudd");

		/*if ($con ==TRUE) 
		{
			echo "Success";
		}
		else
		{
			echo "Not success";
		}*/
		move_uploaded_file($_FILES['img']['tmp_name'], "images/".$img);
		$query = "insert into users(username,email,password,img) values('$name','$email','$pass','$img')";

		$result = mysqli_query($con,$query);

		if ($result>0) {
			echo "<script>alert('Data Inserted')</script>";
		}
		else
		{
			echo "<script>alert('Data Not Inserted')</script>";

		}

		/*Alert User weather the data is inserted or not*/

		
	}
 ?>
