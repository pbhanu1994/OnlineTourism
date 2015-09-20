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
			background-size:cover;
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
<center>
<div class="container-fluid well col-lg-6 columns" style="margin-left:25%">
	
<h1>
	<strong>Sign Up!</strong>
</h1>
	<form action="signup_submit.php" method="post">
		<input type="text" class="form-control lg-4 columns" name="fname" placeholder="First Name">
		<br>
		<input type="text" class="form-control" name="lname" placeholder="Last Name">
<br>
				<label>Gender</label><label class="gender">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Male&nbsp;&nbsp;</label><input type="radio" name="sex" value="Male" /><label class="gender">&nbsp;&nbsp;Female&nbsp;&nbsp;</label><input type="radio" name="sex" value="Female" /><br />
				
				
				<label >Username</label> <input type="text" class="form-control" name="username" placeholder="harry123" required/><br/>
				
				
				<label>Email:</label><input type="email" class="form-control" id="email" name="email" placeholder="eg: example@email.com" required/><br/>
				
				
				<label>Re-Enter Email:</label><input type="email" class="form-control" id="re-email" name="re-email" placeholder="eg: example@email.com" required/> <br/>
				
				<label>New Password</label> <input class="form-control" type="password" name="password" value="" required/> <br />
				
				<label>Birthday</label> 
				<br>
				<span class="col-lg-4 columns">
				<select class="form-control" name="day">
					<option value="1">1</option>
					<option value="2">2</option>					
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
				</span>

				<span class="col-lg-4 columns">
				<select class="form-control" name="month">
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
					</select>
					</span>

				<span class="col-lg-4 columns">
				<select class="form-control" name="year">
					<option value="2014">2014</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
					<option value="2011">2011</option>
					<option value="2010">2010</option>
					<option value="2009">2009</option>
					<option value="2008">2008</option>
					<option value="2007">2007</option>
					<option value="2006">2006</option>
					<option value="2005">2005</option>
					<option value="2004">2004</option>
					<option value="2003">2003</option>
					<option value="2002">2002</option>
					<option value="2001">2001</option>
					<option value="2000">2000</option>
					<option value="1999">1999</option>
					<option value="1998">1998</option>
					<option value="1997">1997</option>
					<option value="1996">1996</option>
					<option value="1995">1995</option>
					<option value="1994">1994</option>
					<option value="1993">1993</option>
					<option value="1992">1992</option>
					<option value="1991">1991</option>
					<option value="1990">1990</option>
					<option value="1989">1989</option>
					<option value="1988">1988</option>
					<option value="1987">1987</option>
					<option value="1986">1986</option>
					<option value="1985">1985</option>
					<option value="1984">1984</option>
					<option value="1983">1983</option>
					<option value="1982">1982</option>
					<option value="1981">1981</option>
					<option value="1980">1980</option>
				</select>
				</span>
				<br>
				<br>
			
				<input type="submit" class="btn btn-primary" name="submit" value="Sign Up">
	</form>
	</div>
	</center>
</body>
</html>