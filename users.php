<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doc</title>
</head>
<style type="text/css">
	table
	{
		width: 100%;
	}
	table,th,tr,td
	{
		border: 2px solid black;
		border-collapse: collapse;
		text-align: center;
	}
</style>
<body>
<table>
	<tr>
		<th>S.No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Img</th>
		<th>Action</th>
	</tr>

	<?php 
		$con = mysqli_connect("localhost","root","","crudd");
		$query = "select * from users";
		$result = mysqli_query($con,$query);
		$no = 1;

		while($row=mysqli_fetch_array($result))
		{
			echo "
					<tr>
						<td>".$no++."</td>
						<td>".$row['username']."</td>
						<td>".$row['email']."</td>
						<td><img src='images/".$row['img']."' width='50' height='50'/></td>
						<td><a href='delete.php?id=".$row['id']."'>Delete</a> | <a href='update.php?id=".$row['id']."'>Update</a></td>
					</tr>
			";
		}
	 ?>
</table>
</body>
</html>