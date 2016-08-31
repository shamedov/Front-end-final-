<?php 


	session_start();
		if ($_SESSION['login']==true){
			$_SESSION['ready']=true;
			

?>

<h1 style="text-align: center;">Xos geldin Admin</h1>
<a href="logout.php" style="float: right; margin: -55px 10px 0 0; background: green; padding: 10px 20px; color: white; border-radius: 5px;">Exit</a>
<?php
}else{
	header('Location: index.php');
}

	
?>
	<a href="header.php" >Header edit</a>
	<a href="about.php" >About edit</a>
	<a href="feature.php" >Feature edit</a>
	<a href="featureSecond.php" >Second Feature edit</a>
	<a href="team.php" >Team edit</a>
<style>
	
	a{
		padding: 10px 20px;
		background: #d3d9df;
		float: left;
		color: #003366;
		margin: 5px;
		text-decoration: none;
		border-radius: 5px;
	}

</style>