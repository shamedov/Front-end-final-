<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include "db.php";
		$sql="SELECT * FROM about";
		$query=mysqli_query($con,$sql);

		$row=mysqli_fetch_assoc($query);
		$h1=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$h5=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$p=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$btn1=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$btn2=$row['text'];
	?>
	<form action="" method="POST" accept-charset="utf-8">
		h1: <input type="text" name="h1" value="<?= $h1 ?>"><br><br>
		h5: <input type="text" name="h5" value="<?= $h5 ?>">
		p: <input type="text" name="p" value="<?= $p ?>">
		btn1: <input type="text" name="btn1" value="<?= $btn1 ?>">
		btn2: <input type="text" name="btn2" value="<?= $btn2 ?>">
		<input type="submit" name="submit">
	</form>

</body>
</html>

<?php 


	if (isset($_POST["submit"])) {
		
		$h1text=$_POST["h1"];
		$h5text=$_POST["h5"];
		$ptext=$_POST["p"];
		$btn1text=$_POST["btn1"];
		$btn2text=$_POST["btn2"];


		$sql="UPDATE about SET text='$h1text' WHERE name='h1'";
		$query=mysqli_query($con,$sql);

		$sql="UPDATE about SET text='$h5text' WHERE name='h5'";
		$query=mysqli_query($con,$sql);

		$sql="UPDATE about SET text='$ptext' WHERE name='p'";
		$query=mysqli_query($con,$sql);

		$sql="UPDATE about SET text='$btn1text' WHERE name='btn1'";
		$query=mysqli_query($con,$sql);

		$sql="UPDATE about SET text='$btn2text' WHERE name='btn2'";
		$query=mysqli_query($con,$sql);
	}

 ?>