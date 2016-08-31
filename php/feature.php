<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include "db.php";
		$sql="SELECT * FROM feature";
		$query=mysqli_query($con,$sql);

		$row=mysqli_fetch_assoc($query);
		$h1=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$h5=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$p=$row['text'];
	?>
	<form action="" method="POST" accept-charset="utf-8">
		h1: <input type="text" name="h1" value="<?= $h1 ?>"><br><br>
		h5: <input type="text" name="h5" value="<?= $h5 ?>">
		p: <input type="text" name="p" value="<?= $p ?>">
		<input type="submit" name="submit">
	</form>

</body>
</html>

<style>

		body{
			background-image: url(../assets/_img/backgroundH.jpg);
		}
		
		input{
			padding: 10px 50px;
			margin: 10px;
			display: block;
			border-left: 5px solid #19c5ff;
		}

	</style>

<?php 


	if (isset($_POST["submit"])) {
		
		$h1text=$_POST["h1"];
		$h5text=$_POST["h5"];
		$ptext=$_POST["p"];


		$sql="UPDATE feature SET text='$h1text' WHERE name='h1'";
		$query=mysqli_query($con,$sql);

		$sql="UPDATE feature SET text='$h5text' WHERE name='h5'";
		$query=mysqli_query($con,$sql);

		$sql="UPDATE feature SET text='$ptext' WHERE name='p'";
		$query=mysqli_query($con,$sql);
	}

 ?>