<?php 
	session_start();
		if ($_SESSION['login']==true){
			$_SESSION['ready']=true;
			
?>

<h1 >Xos geldin Admin</h1>
<a href="logout.php" style="float: right; margin: -55px 10px 0 0; background: green; padding: 10px 20px; color: white; border-radius: 5px;">Exit</a>
<?php
}else{
	header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<a href="header.php" >Header edit</a>
	<a href="about.php" >About edit</a>
	<a href="feature.php" >Feature edit</a>
	<a href="featureSecond.php" >Second Feature edit</a>
	<a href="team.php" >Team edit</a>
</div>
	
<style>
	h1{
		text-align: center;
		color: white;
	}
	a{
		padding: 10px 20px;
		background: #19c5ff;
		float: left;
		color: white;
		margin: 5px;
		text-decoration: none;
		border-radius: 5px;
		font-size: 20px;

	}
	div{
		margin: 0 auto;
		width: 60%;
		height: auto;
	}
	body{
			background-image: url(../assets/_img/backgroundH.jpg);
		}

</style>

</body>
</html>