<?php
	/* $hostname = "127.0.0.1";
	$username = "abu";
	$pass = "password";
	$dataBaseName = "restaurant"; */
	
	$hostname = "localhost";
	$username = "root";
	$pass = "";
	$dataBaseName = "restaurant";

	$connection = mysqli_connect($hostname, $username, $pass);
	$selection = mysqli_select_db($connection, $dataBaseName);
	$success = true;
	if(!$connection){
		echo "combe";
	}
if(!$selection){
	echo "abu";
}
?>
