<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Andhra Pradesh</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/bootstrap-glyphicons">
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<style type="text/css">
		body{
			background-image: url("images/print.jpg");
			height: 100%;
			width: 100%;
			background-size: cover;
			background-repeat: no-repeat;
			display: block;
			background-attachment: scroll;
		}
	</style>
</head>
<body>
<nav class="navbar" style="background-color:#f0fff0">
		<a class="navbar-brand" href="/">Indian Tourism</a>
	<ul class="nav navbar-nav pull-right" style="list-style:none; display:inline">
		<li><a class="pull-right"href="timeline.php" title="">Home</a></li>
		<li><a href="bookticket.php" title="">Book Ticket</a></li>
		<li><a href="orders.php" title="">My Orders</a></li>
		<li><a href="savedpackage.php" title="">Saved Packages</a></li>
		<li><a href="logout.php" title="">Logout</a></li>
	</ul>
	</nav>
<div class="container">
<div class="row">
<div class="well">
<center>
<h1><strong>Places selected</strong></h1>
</center>
<?php
$name = $_GET['city'];
$_SESSION['names'] = $name;
// optional
// echo "You chose the following color(s): <br>";

foreach ($name as $city){
echo '<center><h3>'.$city."</h3></center>";
}

?>

<center>
	<a href="bookticket.php" class="btn btn-primary">Next</a>
</center>
</div>
</div>
</div>
</body>
</html>