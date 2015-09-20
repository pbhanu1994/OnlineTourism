<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Book | Online Tourism System</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-glyphicons">
	<link rel="stylesheet" href="css/index.css">
	<script src="/js/bootstrap.js" type="text/javascript"></script>
	<style type="text/css" media="screen">
		body{
			background-image: url("images/confirm.jpg");
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
		<li><a href="logout.php" title="">Logout</a></li>
	</ul>
</nav>
	
	<?php 
		$from = $_GET['from'];
		$_SESSION['from'] = $from;

		$to = $_GET['to'];
		$_SESSION['to'] = $to;

		$dep_date = $_GET['dep_date'];
		$_SESSION['dep_date'] = $dep_date;

		$return_date = $_GET['return_date'];
		$_SESSION['return_date'] = $return_date;

		$adults = $_GET['adults'];
		$_SESSION['adults'] = $adults;

		$child = $_GET['child'];
		$_SESSION['child'] = $child;

		$class = $_GET['class'];
		$_SESSION['class'] = $class;
	 ?>
	 <br><br><br><br><br><br><br><br><br><br><br>
<div class="well">
<table class="table table-bordered">
  <tr>
  	<th><strong>FROM</strong></th>
  	<th><strong>TO</strong></th>
  	<th><strong>DEPARTURE DATE</strong></th>
  	<th><strong>RETURN DATE</strong></th>
  	<th><strong>ADULTS</strong></th>
  	<th><strong>CHILD</strong></th>
  	<th><strong>CLASS</strong></th>

  </tr>
  <tr>
  	<td><?php echo $from; ?></td>
  	<td><?php echo $to; ?></td>
  	<td><?php echo $dep_date; ?></td>
  	<td><?php echo $return_date; ?></td>
  	<td><?php echo $adults; ?></td>
  	<td><?php echo $child; ?></td>
  	<td><?php echo $class; ?></td>
  </tr>
</table>
</div>
<center>
<a href="http://www.cleartrip.com/flights?gclid=CNDcqIPfzsQCFRYTjgodnoIAqA" target="_blank" class="btn btn-warning">Search Flight</a>
<a href="http://www.booking.com/country/in.html?aid=318615;label=Low_CPA_English_EN_ALL-GBIECAUS_12118496905-OIFp4kqx4Ii*VmtxyZzdswS46623165985:pl:ta:p1:p2:ac:ap1t1:neg;ws=&gclid=CLXHg-LezsQCFU8njgodPQUA4A" target="_blank" class="btn btn-primary">Book Hotel</a>
<a href="printpage.php" class="btn btn-info">Next</a>

</center>
</body>
</html>