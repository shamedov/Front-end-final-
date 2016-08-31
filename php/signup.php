<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap.css">
</head>

	<style>
		body{

			background: url(../assets/_img/backgroundH.jpg);
		}
		button{
			padding: 10px 50px;
			background: #6ea038;
			outline: none;
			text-decoration: none;
			margin: 20px 0;
			border-radius: 5px;
			color: white;
		}
		
		img, button, p, h3{
			text-align: center;
		}
		img{
			border-radius: 100%;
			border: 3px solid lightblue;
			margin-top: 10px;
		}
		input{
			display: block;
			width: 90%;
			margin: 10px 0 0 15px;
			padding: 5px;
			border-radius: 5px;
		}
		

		#admin{
			border-radius: 5px;
			background: white;
			text-align: center;
			margin-top: 30px;
			color : #7F8FA4
		}
		
		

	</style>

<body>


	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			<div id="admin">
				<img src="image.png">
				<h3>Create account</h3>
				<form action="" method="post">
					<input type="text" placeholder="name" name="name">
					<input type="text" placeholder="surname" name="surname">
					<input type="email" placeholder="Email Adress" name="email">
					<input type="password" placeholder="Password" name="password">
					<input type="submit" name="submitCheck" value="Sign up">
				</form>
				
			</div>
		</div>
	</div>
	
</body>
</html>
	
	<?php 

		if(isset($_POST["submitCheck"])){

			$ad=$_POST["name"];
			$soyad=$_POST["surname"];
			$email=$_POST["email"];
			$password=$_POST["password"];

			include "db.php";

			$sql="INSERT INTO users(name,surname,mail,password) VALUES('$ad','$soyad','$email','$password')";
			$query=mysqli_query($con,$sql);
			var_dump($sql);

			if($query){
				header("Location:index.php");
			}else{

				echo "Data elave olunmadi";
			}
		}

	 ?>
