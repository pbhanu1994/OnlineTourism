<?php 
session_start();
include_once("db.php");

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM registration WHERE username = '$username' OR email = '$username' AND password = '$password'";
	$select = mysql_query($query);

	$result = mysql_num_rows($select);
	if($result > 0){

		$row = mysql_fetch_array($select);
		$email = $row['email'];
		$_SESSION['email'] = $email;

		$fname = $row['fname'];
		$_SESSION['fname'] = $fname;

		header("Location:timeline.php");

	}else{
		echo '<p class="alert alert-danger">Username / Password is Incorrect</p>';
	}

	if(!mysql_query(query)){
		die(mysql_error());
	}
?>