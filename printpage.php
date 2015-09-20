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
		<li><a href="logout.php" title="">Logout</a></li>
	</ul>
</nav>

<?php 
$from = $_SESSION['from'];
$to = $_SESSION['to'];
$dep_date = $_SESSION['dep_date'];
$return_date = $_SESSION['return_date'];
$adults = $_SESSION['adults'];
$child = $_SESSION['child'];
$class = $_SESSION['class'];
?>
<center>
<h1 style="color:#fff;"><strong>PRINT</strong></h1>
</center>
<br>
<div class="well">
<table class="table table-striped">
  <tr>
  	<th><strong>FROM</strong></th>
  	<td><?php echo $from; ?></td>
  </tr>
  <tr>
  	<th><strong>TO</strong></th>
  	<td><?php echo $to; ?></td>
  </tr>
<tr>
	<th><strong>AIRLINES</strong></th>
	<td>AIR DECCAN</td>
</tr>
<tr>
	<th><strong>DEPARTURE DATE</strong></th>
	<td><?php echo $dep_date; ?></td>
</tr>
<tr>
	<th><strong>RETURN DATE</strong></th>
	<td><?php echo $return_date; ?></td>
</tr>
<tr>
	<th><strong>FLIGHT DEPARTURE TIME</strong></th>
	<td>21:00</td>
</tr>
<tr>
	<th><strong>FLIGHT ARRIVAL TIME</strong></th>
	<td>23:00</td>
</tr>
<tr>
	<th><strong>ADULTS</strong></th>
	<td><?php echo $adults; ?></td>
</tr>
<tr>
	<th><strong>CHILD</strong></th>
	<td><?php echo $child; ?></td>
</tr>
  <tr>
  	<th><strong>CLASS</strong></th>
  	<td><?php echo $class; ?></td>
  </tr>
  <tr>
  	<th><strong>FLIGHT FARE</strong></th>
  	<td>Rs.8,000/-</td>
  </tr>
  <tr>
  	<th><strong>HOTEL TICKET FARE</strong></th>
  	<td>Rs.13,000/-</td>
  </tr>
  <tr>
  	<th><strong>TOTAL FARE</strong></th>
  	<td>Rs.21000/-</td>
  </tr>
</table>
</div>
<center>
<!--<a href="" target="_blank" class="btn btn-warning">Proceed to checkout</a>-->
<a href="javascript:void();" onclick="myprint()" class="btn btn-primary">Print </a>
</center>

<script>
function myprint(){
	window.print();
}
</script>
</body>
</html>