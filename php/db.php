<?php 

	$host="localhost";
	$username="root";
	$password="";
	$dbname="pair";


	$con=mysqli_connect($host,$username,$password,$dbname);

	if(!$con){

		echo "Errorlarini duzelt";

	}

 ?>