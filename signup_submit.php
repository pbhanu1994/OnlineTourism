<?php 
	include_once("db.php");
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$sex = $_POST['sex'];
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				//Date of Birth
				$day = $_POST["day"];
				$month = $_POST["month"];
				$year = $_POST["year"];

				
				$sql = mysql_query("INSERT INTO registration (fname,lname,gender,username,email,password,day,month,year) VALUES ('$fname','$lname','$sex','$username','$email','$password','$day','$month','$year')");
					
				if(!$sql) {
					die("Error".mysql_error());
					mysql_close();
			}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Successful</title>
 		<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/bootstrap-glyphicons">
	<script src="/js/bootstrap.js" type="text/javascript"></script>
 </head>
 <body>
 	<center><h1 class="alert alert-success">Registration Successful!</h1>
 	<a href="login.php"><input class="btn btn-primary" name="" value="Next"></a>
 	</center>
 </body>
 </html>