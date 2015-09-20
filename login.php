<!DOCTYPE html>
<html>
<head>
	<title>Sign Up!</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/bootstrap-glyphicons">
	<script src="/js/bootstrap.js" type="text/javascript"></script>
	<style type="text/css">
		body{
			background-image: url("images/bend.jpg");
			background-size: cover;
			background-repeat: no-repeat;
			
		}
	</style>
</head>
<body>
<nav class="navbar" style="background-color:#f0fff0">
<a class="navbar-brand" href="/">Indian Tourism</a>
	<ul class="nav navbar-nav pull-right" style="list-style:none; display:inline">
		<li><a class="pull-right"href="index.php" title="">Home</a></li>
		<!--<li><a href="bookticket.php" title="">Book Ticket</a></li>
		<li><a href="" title="">Hotels</a></li>
		<li><a href="" title="">Packages</a></li>-->
		<li><a href="login.php" title="">Login</a></li>
		<li><a href="signup.php" title="">Sign Up</a></li>
	</ul>
</nav>
<br>
<br>
<br>
<center>
<div class="container-fluid well col-lg-6 columns" style="margin-left:25%">
	
<h1>
	<strong>Login</strong>
</h1>
	<form action="login_submit.php" method="post">
				
				<label >Username / Email</label> <input type="text" class="form-control" name="username" placeholder="harry123/harry123@mail.com" required/><br/>
				
				
				<label>Password</label><input class="form-control" type="password" name="password" required>
			<br>
				<input type="submit" class="btn btn-primary" name="submit" value="Login">
	</form>
	</div>
	</center>
</body>
</html>