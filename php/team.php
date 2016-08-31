<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include "db.php";
		$sql="SELECT * FROM team";
		$query=mysqli_query($con,$sql);

		$row=mysqli_fetch_assoc($query);
		$img1=$row['text'];
		$row=mysqli_fetch_assoc($query);
		$img2=$row['text'];
		$row=mysqli_fetch_assoc($query);
		$img3=$row['text'];
		$row=mysqli_fetch_assoc($query);
		$img4=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$h41=$row['text'];
		$row=mysqli_fetch_assoc($query);
		$h42=$row['text'];
		$row=mysqli_fetch_assoc($query);
		$h43=$row['text'];
		$row=mysqli_fetch_assoc($query);
		$h44=$row['text'];

		$row=mysqli_fetch_assoc($query);
		$p=$row['text'];
	?>
	<form action="" method="POST" accept-charset="utf-8">
		img1: <input type="text" name="img1" value="<?= $img1 ?>"><br><br>
		img2: <input type="text" name="img2" value="<?= $img2 ?>"><br><br>
		img3: <input type="text" name="img3" value="<?= $img3 ?>"><br><br>
		img4: <input type="text" name="img4" value="<?= $img4 ?>"><br><br>

		h41: <input type="text" name="h41" value="<?= $h41 ?>"><br><br>
		h42: <input type="text" name="h42" value="<?= $h42 ?>"><br><br>
		h43: <input type="text" name="h43" value="<?= $h43 ?>"><br><br>
		h44: <input type="text" name="h44" value="<?= $h44 ?>"><br><br>
		
		p: <input type="text" name="p" value="<?= $p ?>">
		<input type="submit" name="submit">
	</form>

</body>
</html>

<?php 



	if (isset($_POST["submit"])) {
		
		$img1text=$_POST["img1"];
		$img2text=$_POST["img2"];
		$img3text=$_POST["img3"];
		$img4text=$_POST["img4"];
		$h41text=$_POST["h41"];
		$h42text=$_POST["h42"];
		$h43text=$_POST["h43"];
		$h44text=$_POST["h44"];
		$ptext=$_POST["p"];


		$sql="UPDATE team SET text='$img1text' WHERE name='img1'";
		$query=mysqli_query($con,$sql);
		$sql="UPDATE team SET text='$img2text' WHERE name='img2'";
		$query=mysqli_query($con,$sql);
		$sql="UPDATE team SET text='$img3text' WHERE name='img3'";
		$query=mysqli_query($con,$sql);
		$sql="UPDATE team SET text='$img4text' WHERE name='img4'";
		$query=mysqli_query($con,$sql);

		$sql="UPDATE team SET text='$h41text' WHERE name='h41'";
		$query=mysqli_query($con,$sql);
		$sql="UPDATE team SET text='$h42text' WHERE name='h42'";
		$query=mysqli_query($con,$sql);
		$sql="UPDATE team SET text='$h43text' WHERE name='h43'";
		$query=mysqli_query($con,$sql);
		$sql="UPDATE team SET text='$h44text' WHERE name='h44'";
		$query=mysqli_query($con,$sql);

		$sql="UPDATE team SET text='$ptext' WHERE name='p'";
		$query=mysqli_query($con,$sql);
	}

 ?>