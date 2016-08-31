<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include "db.php";
		$sql="SELECT * FROM featureSecond";
		$query=mysqli_query($con,$sql);

		$row=mysqli_fetch_assoc($query);
		$iClass1=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$h51=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$p1=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$iClass2=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$h52=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$p2=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$iClass3=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$h53=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$p3=$row['text'];
	?>
	<form action="" method="POST" accept-charset="utf-8">
		iClass1: <input type="text" name="iClass1" value="<?= $iClass1 ?>">
		h51: <input type="text" name="h51" value="<?= $h51 ?>">
		p1: <input type="text" name="p1" value="<?= $p1 ?>">

		iClass2: <input type="text" name="iClass2" value="<?= $iClass2 ?>">
		h52: <input type="text" name="h52" value="<?= $h52 ?>">
		p2: <input type="text" name="p2" value="<?= $p2 ?>">

		iClass3: <input type="text" name="iClass3" value="<?= $iClass3 ?>">
		h53: <input type="text" name="h53" value="<?= $h53 ?>">
		p3: <input type="text" name="p3" value="<?= $p3 ?>">
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
		
		$iClasstext1=$_POST["iClass1"];
		$h5text1=$_POST["h51"];
		$ptext1=$_POST["p1"];

		$iClasstext2=$_POST["iClass2"];
		$h5text2=$_POST["h52"];
		$ptext2=$_POST["p2"];

		$iClasstext3=$_POST["iClass3"];
		$h5text3=$_POST["h53"];
		$ptext3=$_POST["p3"];


		$sql="UPDATE featureSecond SET text='$iClasstext1' WHERE name='iClass1'";
		$query=mysqli_query($con,$sql);

		$sql="UPDATE featureSecond SET text='$h5text1' WHERE name='h51'";
		$query=mysqli_query($con,$sql);

		$sql="UPDATE featureSecond SET text='$ptext1' WHERE name='p1'";
		$query=mysqli_query($con,$sql);


		$sql="UPDATE featureSecond SET text='$iClasstext2' WHERE name='iClass2'";
		$query=mysqli_query($con,$sql);

		$sql="UPDATE featureSecond SET text='$h5text2' WHERE name='h52'";
		$query=mysqli_query($con,$sql);

		$sql="UPDATE featureSecond SET text='$ptext2' WHERE name='p2'";
		$query=mysqli_query($con,$sql);


		$sql="UPDATE featureSecond SET text='$iClasstext3' WHERE name='iClass3'";
		$query=mysqli_query($con,$sql);

		$sql="UPDATE featureSecond SET text='$h5text3' WHERE name='h53'";
		$query=mysqli_query($con,$sql);

		$sql="UPDATE featureSecond SET text='$ptext3' WHERE name='p3'";
		$query=mysqli_query($con,$sql);
	}

 ?>