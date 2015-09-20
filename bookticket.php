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
			background-image: url("images/bookticket.jpg");
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

<div class="container">
<div class="well">
<div class="row">

<center>
<h1><strong>Book Ticket</strong></h1>
<hr>
<h2><strong>Places Selected:</strong></h2>
<?php 
$names = $_SESSION['names'];
foreach ($names as $city) {
	echo '<center><h3>'.$city."</h3></center>";
}
 ?>
<form action="confirm.php" method="GET">
<div class="col-lg-6 col-md-12 columns">
	<!--<input type="text" row="5" class="form-control pull-left" name="from" placeholder="FROM" value="">-->
	<!-- FROM -->
	<h3>FROM (Current City)</h3>
	<select class="form-control" name="from">
		<option value="Agartala">Agartala</option>
		<option value="Agra">Agra</option>
		<option value="Agumbe">Agumbe</option>
		<option value="Ahmedabad">Ahmedabad</option>
		<option value="Aizawl">Aizawl</option>
		<option value="Ajmer">Ajmer</option>
		<option value="Alappuzha Beach">Alappuzha Beach</option>
		<option value="Allahabad">Allahabad</option>
		<option value="Alleppey">Alleppey</option>
		<option value="Almora">Almora</option>
		<option value="Amarnath">Amarnath</option>
		<option value="Amritsar">Amritsar</option>
		<option value="Anantagir">Anantagir</option>
		<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
		<option value="Araku valley">Araku valley</option>
		<option value="Aurangabad">Aurangabad</option>
		<option value="Ayodhya">Ayodhya</option>
		<option value="Badrinath">Badrinath</option>
		<option value="Bandhavgarh National Park">Bandhavgarh National Park</option>
		<option value="Bangalore">Bangalore</option>
		<option value="Baroda">Baroda</option>
		<option value="Bastar">Bastar</option>
		<option value="Bhagalpur">Bhagalpur</option>
		<option value="Bhilai">Bhilai</option>
		<option value="Bhimtal">Bhimtal</option>
		<option value="Bhopal">Bhopal</option>
		<option value="Bhubaneswar">Bhubaneswar</option>
		<option value="Bhuj">Bhuj</option>
		<option value="Bidar">Bidar</option>
		<option value="Bilaspur">Bilaspur</option>
		<option value="Bodh Gaya">Bodh Gaya</option>
		<option value="Calicut">Calicut</option>
		<option value="Chandigarh">Chandigarh</option>
		<option value="Chail">Chail</option>
		<option value="Chamba">Chamba</option>
		<option value="Chennai">Chennai</option>
		<option value="Chennai Beaches">Chennai Beaches</option>
		<option value="Cherai">Cherai</option>
		<option value="Cherrapunji">Cherrapunji</option>
		<option value="Chopta">Chopta</option>
		<option value="Chidambaram">Chidambaram</option>
		<option value="Chikhaldara Hills">Chikhaldara Hills</option>
		<option value="Coimbatore">Coimbatore</option>
		<option value="Coonoor">Coonoor</option>
		<option value="Coorg">Coorg</option>
		<option value="Corbett National Park">Corbett National Park</option>
		<option value="Cotigao Wild Life Sanctuary">Cotigao Wild Life Sanctuary</option>
		<option value="Cuttack">Cuttack</option>
		<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
		<option value="Daman and Diu">Daman and Diu</option>
		<option value="Dalhousie">Dalhousie</option>
		<option value="Darjeeling">Darjeeling</option>
		<option value="Dehradun">Dehradun</option>
		<option value="Delhi">Delhi</option>
		<option value="Devikulam">Devikulam</option>
		<option value="Dharamashala">Dharamashala</option>
		<option value="Dhanaulti">Dhanaulti</option>
		<option value="Dindigul">Dindigul</option>
		<option value="Dudhwa National Park">Dudhwa National Park</option>
		<option value="Dwaraka">Dwaraka</option>
		<option value="Faridabad">Faridabad</option>
		<option value="Gandhinagar">Gandhinagar</option>
		<option value="Gangotri">Gangotri</option>
		<option value="Gangtok">Gangtok</option>
		<option value="Gir Wildlife Sanctuary">Gir Wildlife Sanctuary</option>
		<option value="Great Himalayan National Park">Great Himalayan National Park</option>
		<option value="Goa">Goa</option>
		<option value="Gwalior">Gwalior</option>
		<option value="Gulmarg">Gulmarg</option>
		<option value="Gurgaon">Gurgaon</option>
		<option value="Guruvayoor">Guruvayoor</option>
		<option value="Guwahati">Guwahati</option>
		<option value="Hampi">Hampi</option>
		<option value="Haridwar">Haridwar</option>
		<option value="Hogenakkal">Hogenakkal</option>
		<option value="Horsley-Hils">Horsley-Hills</option>
		<option value="Hyderabad">Hyderabad</option>
		<option value="Imphal">Imphal</option>
		<option value="Itangar">Itangar</option>
		<option value="Indore">Indore</option>
		<option value="Idukki">Idukki</option>
		<option value="Jaipur">Jaipur</option>
		<option value="Jaisalmer">Jaisalmer</option>
		<option value="Jabalpur">Jabalpur</option>
		<option value="Jalandhar">Jalandhar</option>
		<option value="Jamshedpur">Jamshedpur</option>
		<option value="Jammu">Jammu</option>
		<option value="Jodhpur">Jodhpur</option>
		<option value="Kanchipuram">Kanchipuram</option>
		<option value="Kanha National Park">Kanha National Park</option>
		<option value="Kanpur">Kanpur</option>
		<option value="Kanyakumari">Kanyakumari</option>
		<option value="Kargil">Kargil</option>
		<option value="Karwar">Karwar</option>
		<option value="Kausani">Kausani</option>
		<option value="Kedarnath">Kedarnath</option>
		<option value="Keoladeoghana National Park">Keoladeoghana National Park</option>
		<option value="Khajuraho">Khajuraho</option>
		<option value="Kochi">Kochi</option>
		<option value="Kodaikanal">Kodaikanal</option>
		<option value="Kolkata">Kolkata</option>
		<option value="Kollam">Kollam</option>
		<option value="Konark">Konark</option>
		<option value="Kotagiri">Kotagiri</option>
		<option value="Kottakkal and Ayurveda">Kottakkal and Ayurveda</option>
		<option value="Kovalam">Kovalam</option>
		<option value="Kovalam and Ayurveda">Kovalam and Ayurveda</option>
		<option value="Kudremukh">Kudremukh</option>
		<option value="Kullu">Kullu</option>
		<option value="Kumarakom">Kumarakom</option>
		<option value="Kumarakom and Ayurveda">Kumarakom and Ayurveda</option>
		<option value="Kumarakom Bird Sanctuary">Kumarakom Bird Sanctuary</option>
		<option value="Kumaon">Kumaon</option>
		<option value="Kurukshetra">Kurukshetra</option>
		<option value="Lakshadweep">Lakshadweep	</option>
		<option value="Ludhiana">Ludhiana</option>
		<option value="Lucknow">Lucknow</option>
		<option value="Madurai">Madurai</option>
		<option value="Mahabalipuram">Mahabalipuram</option>
		<option value="Malpe Beach">Malpe Beach	</option>
		<option value="Manas National Park">Manas National Park</option>
		<option value="Mangalore">Mangalore</option>
		<option value="Mumbai">Mumbai</option>
		<option value="Margoa">Margoa</option>
		<option value="Maravanthe Beach">Maravanthe Beach</option>
		<option value="Mount Abu">Mount Abu</option>
		<option value="Munnar">Munnar</option>
		<option value="Mussoorie">Mussoorie</option>
		<option value="Mysore">Mysore</option>
		<option value="Nahsik">Nahsik</option>
		<option value="Nalanda">Nalanda</option>
		<option value="Nandi-Hills">Nandi-Hills</option>
		<option value="Nanda Devi National Park">Nanda Devi National Park</option>
		<option value="Netravali Wild Life Sanctuary">Netravali Wild Life Sanctuary</option>
		<option value="Ooty">Ooty</option>
		<option value="Orchha">Orchha</option>
		<option value="Pahalgam">Pahalgam</option>
		<option value="Palakkad">Palakkad</option>
		<option value="Patnitop">Patnitop</option>
		<option value="Patna">Patna</option>
		<option value="Panchgani">Panchgani</option>
		<option value="Pattadakkal">Pattadakkal</option>
		<option value="Periyar Wildlife Sanctuary">Periyar Wildlife Sanctuary</option>
		<option value="Pithoragarh">Pithoragarh</option>
		<option value="Pondicherry">Pondicherry</option>
		<option value="Pune">Pune</option>
		<option value="Puri">Puri</option>
		<option value="Pushkar">Pushkar</option>
		<option value="Raipur">Raipur</option>
		<option value="Rajgir">Rajgir</option>
		<option value="Rajaji National Park">Rajaji National Park</option>
		<option value="Ranchi">Ranchi</option>
		<option value="Ranganthittu Bird Sanctuary">Ranganthittu Bird Sanctuary</option>
		<option value="Ranthambore">Ranthambore</option>
		<option value="Ranikhet">Ranikhet</option>
		<option value="Rameshwaram">Rameshwaram</option>
		<option value="Rishikesh">Rishikesh</option>
		<option value="Rourkela">Rourkela</option>
		<option value="Sanchi">Sanchi	</option>
		<option value="Saputara">Saputara</option>
		<option value="Sariska Wildlife">Sariska Wildlife </option>
		<option value="Sanctuary">Sanctuary	</option>
		<option value="Shillong">Shillong</option>
		<option value="Shimla">Shimla	</option>
		<option value="Sohna_Hills">Sohna_Hills</option>
		<option value="Sunderbans">Sunderbans</option>
		<option value="Surat">Surat</option>
		<option value="Srinagar">Srinagar</option>
		<option value="Thanjavur">Thanjavur</option>
		<option value="Tezpur">Tezpur</option>
		<option value="Thrissur">Thrissur</option>
		<option value="Tirunelveli">Tirunelveli</option>
		<option value="Trichy">Trichy</option>
		<option value="Tirupati">Tirupati</option>
		<option value="Thiruvananthapuram">Thiruvananthapuram</option>
		<option value="Udaipur">Udaipur</option>
		<option value="Ujjain">Ujjain</option>
		<option value="Vaishali">Vaishali</option>
		<option value="Valley of Flowers">Valley of Flowers</option>
		<option value="Varanasi">Varanasi</option>
		<option value="Varkala and Ayurveda">Varkala and Ayurveda</option>
		<option value="Vijayawada">Vijayawada</option>
		<option value="Vishakhapatnam">Vishakhapatnam</option>
		<option value="Vrindhavan">Vrindhavan</option>
		<option value="Warangal">Warangal</option>
		<option value="Wayanad">Wayanad</option>
		<option value="Wayanad">Wayanad </option>
		<option value="Wildlife Sanctuary">Wildlife Sanctuary</option>
		<option value="Yercaud">Yercaud</option>
		<option value="Zanskar">Zanskar</option>
	</select>
</div>
	<div class="col-lg-6 columns">
	<h3>TO</h3>
	<!--<input type="text" class="form-control pull-left"  name="to" placeholder="TO">-->
	<select class="form-control" name="to">
		<option value="Agartala">Agartala</option>
		<option value="Agra">Agra</option>
		<option value="Agumbe">Agumbe</option>
		<option value="Ahmedabad">Ahmedabad</option>
		<option value="Aizawl">Aizawl</option>
		<option value="Ajmer">Ajmer</option>
		<option value="Alappuzha Beach">Alappuzha Beach</option>
		<option value="Allahabad">Allahabad</option>
		<option value="Alleppey">Alleppey</option>
		<option value="Almora">Almora</option>
		<option value="Amarnath">Amarnath</option>
		<option value="Amritsar">Amritsar</option>
		<option value="Anantagir">Anantagir</option>
		<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
		<option value="Araku valley">Araku valley</option>
		<option value="Aurangabad">Aurangabad</option>
		<option value="Ayodhya">Ayodhya</option>
		<option value="Badrinath">Badrinath</option>
		<option value="Bandhavgarh National Park">Bandhavgarh National Park</option>
		<option value="Bangalore">Bangalore</option>
		<option value="Baroda">Baroda</option>
		<option value="Bastar">Bastar</option>
		<option value="Bhagalpur">Bhagalpur</option>
		<option value="Bhilai">Bhilai</option>
		<option value="Bhimtal">Bhimtal</option>
		<option value="Bhopal">Bhopal</option>
		<option value="Bhubaneswar">Bhubaneswar</option>
		<option value="Bhuj">Bhuj</option>
		<option value="Bidar">Bidar</option>
		<option value="Bilaspur">Bilaspur</option>
		<option value="Bodh Gaya">Bodh Gaya</option>
		<option value="Calicut">Calicut</option>
		<option value="Chandigarh">Chandigarh</option>
		<option value="Chail">Chail</option>
		<option value="Chamba">Chamba</option>
		<option value="Chennai">Chennai</option>
		<option value="Chennai Beaches">Chennai Beaches</option>
		<option value="Cherai">Cherai</option>
		<option value="Cherrapunji">Cherrapunji</option>
		<option value="Chopta">Chopta</option>
		<option value="Chidambaram">Chidambaram</option>
		<option value="Chikhaldara Hills">Chikhaldara Hills</option>
		<option value="Coimbatore">Coimbatore</option>
		<option value="Coonoor">Coonoor</option>
		<option value="Coorg">Coorg</option>
		<option value="Corbett National Park">Corbett National Park</option>
		<option value="Cotigao Wild Life Sanctuary">Cotigao Wild Life Sanctuary</option>
		<option value="Cuttack">Cuttack</option>
		<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
		<option value="Daman and Diu">Daman and Diu</option>
		<option value="Dalhousie">Dalhousie</option>
		<option value="Darjeeling">Darjeeling</option>
		<option value="Dehradun">Dehradun</option>
		<option value="Delhi">Delhi</option>
		<option value="Devikulam">Devikulam</option>
		<option value="Dharamashala">Dharamashala</option>
		<option value="Dhanaulti">Dhanaulti</option>
		<option value="Dindigul">Dindigul</option>
		<option value="Dudhwa National Park">Dudhwa National Park</option>
		<option value="Dwaraka">Dwaraka</option>
		<option value="Faridabad">Faridabad</option>
		<option value="Gandhinagar">Gandhinagar</option>
		<option value="Gangotri">Gangotri</option>
		<option value="Gangtok">Gangtok</option>
		<option value="Gir Wildlife Sanctuary">Gir Wildlife Sanctuary</option>
		<option value="Great Himalayan National Park">Great Himalayan National Park</option>
		<option value="Goa">Goa</option>
		<option value="Gwalior">Gwalior</option>
		<option value="Gulmarg">Gulmarg</option>
		<option value="Gurgaon">Gurgaon</option>
		<option value="Guruvayoor">Guruvayoor</option>
		<option value="Guwahati">Guwahati</option>
		<option value="Hampi">Hampi</option>
		<option value="Haridwar">Haridwar</option>
		<option value="Hogenakkal">Hogenakkal</option>
		<option value="Horsley-Hils">Horsley-Hills</option>
		<option value="Hyderabad">Hyderabad</option>
		<option value="Imphal">Imphal</option>
		<option value="Itangar">Itangar</option>
		<option value="Indore">Indore</option>
		<option value="Idukki">Idukki</option>
		<option value="Jaipur">Jaipur</option>
		<option value="Jaisalmer">Jaisalmer</option>
		<option value="Jabalpur">Jabalpur</option>
		<option value="Jalandhar">Jalandhar</option>
		<option value="Jamshedpur">Jamshedpur</option>
		<option value="Jammu">Jammu</option>
		<option value="Jodhpur">Jodhpur</option>
		<option value="Kanchipuram">Kanchipuram</option>
		<option value="Kanha National Park">Kanha National Park</option>
		<option value="Kanpur">Kanpur</option>
		<option value="Kanyakumari">Kanyakumari</option>
		<option value="Kargil">Kargil</option>
		<option value="Karwar">Karwar</option>
		<option value="Kausani">Kausani</option>
		<option value="Kedarnath">Kedarnath</option>
		<option value="Keoladeoghana National Park">Keoladeoghana National Park</option>
		<option value="Khajuraho">Khajuraho</option>
		<option value="Kochi">Kochi</option>
		<option value="Kodaikanal">Kodaikanal</option>
		<option value="Kolkata">Kolkata</option>
		<option value="Kollam">Kollam</option>
		<option value="Konark">Konark</option>
		<option value="Kotagiri">Kotagiri</option>
		<option value="Kottakkal and Ayurveda">Kottakkal and Ayurveda</option>
		<option value="Kovalam">Kovalam</option>
		<option value="Kovalam and Ayurveda">Kovalam and Ayurveda</option>
		<option value="Kudremukh">Kudremukh</option>
		<option value="Kullu">Kullu</option>
		<option value="Kumarakom">Kumarakom</option>
		<option value="Kumarakom and Ayurveda">Kumarakom and Ayurveda</option>
		<option value="Kumarakom Bird Sanctuary">Kumarakom Bird Sanctuary</option>
		<option value="Kumaon">Kumaon</option>
		<option value="Kurukshetra">Kurukshetra</option>
		<option value="Lakshadweep">Lakshadweep	</option>
		<option value="Ludhiana">Ludhiana</option>
		<option value="Lucknow">Lucknow</option>
		<option value="Madurai">Madurai</option>
		<option value="Mahabalipuram">Mahabalipuram</option>
		<option value="Malpe Beach">Malpe Beach	</option>
		<option value="Manas National Park">Manas National Park</option>
		<option value="Mangalore">Mangalore</option>
		<option value="Mumbai">Mumbai</option>
		<option value="Margoa">Margoa</option>
		<option value="Maravanthe Beach">Maravanthe Beach</option>
		<option value="Mount Abu">Mount Abu</option>
		<option value="Munnar">Munnar</option>
		<option value="Mussoorie">Mussoorie</option>
		<option value="Mysore">Mysore</option>
		<option value="Nahsik">Nahsik</option>
		<option value="Nalanda">Nalanda</option>
		<option value="Nandi-Hills">Nandi-Hills</option>
		<option value="Nanda Devi National Park">Nanda Devi National Park</option>
		<option value="Netravali Wild Life Sanctuary">Netravali Wild Life Sanctuary</option>
		<option value="Ooty">Ooty</option>
		<option value="Orchha">Orchha</option>
		<option value="Pahalgam">Pahalgam</option>
		<option value="Palakkad">Palakkad</option>
		<option value="Patnitop">Patnitop</option>
		<option value="Patna">Patna</option>
		<option value="Panchgani">Panchgani</option>
		<option value="Pattadakkal">Pattadakkal</option>
		<option value="Periyar Wildlife Sanctuary">Periyar Wildlife Sanctuary</option>
		<option value="Pithoragarh">Pithoragarh</option>
		<option value="Pondicherry">Pondicherry</option>
		<option value="Pune">Pune</option>
		<option value="Puri">Puri</option>
		<option value="Pushkar">Pushkar</option>
		<option value="Raipur">Raipur</option>
		<option value="Rajgir">Rajgir</option>
		<option value="Rajaji National Park">Rajaji National Park</option>
		<option value="Ranchi">Ranchi</option>
		<option value="Ranganthittu Bird Sanctuary">Ranganthittu Bird Sanctuary</option>
		<option value="Ranthambore">Ranthambore</option>
		<option value="Ranikhet">Ranikhet</option>
		<option value="Rameshwaram">Rameshwaram</option>
		<option value="Rishikesh">Rishikesh</option>
		<option value="Rourkela">Rourkela</option>
		<option value="Sanchi">Sanchi	</option>
		<option value="Saputara">Saputara</option>
		<option value="Sariska Wildlife">Sariska Wildlife </option>
		<option value="Sanctuary">Sanctuary	</option>
		<option value="Shillong">Shillong</option>
		<option value="Shimla">Shimla	</option>
		<option value="Sohna_Hills">Sohna_Hills</option>
		<option value="Sunderbans">Sunderbans</option>
		<option value="Surat">Surat</option>
		<option value="Srinagar">Srinagar</option>
		<option value="Thanjavur">Thanjavur</option>
		<option value="Tezpur">Tezpur</option>
		<option value="Thrissur">Thrissur</option>
		<option value="Tirunelveli">Tirunelveli</option>
		<option value="Trichy">Trichy</option>
		<option value="Tirupati">Tirupati</option>
		<option value="Thiruvananthapuram">Thiruvananthapuram</option>
		<option value="Udaipur">Udaipur</option>
		<option value="Ujjain">Ujjain</option>
		<option value="Vaishali">Vaishali</option>
		<option value="Valley of Flowers">Valley of Flowers</option>
		<option value="Varanasi">Varanasi</option>
		<option value="Varkala and Ayurveda">Varkala and Ayurveda</option>
		<option value="Vijayawada">Vijayawada</option>
		<option value="Vishakhapatnam">Vishakhapatnam</option>
		<option value="Vrindhavan">Vrindhavan</option>
		<option value="Warangal">Warangal</option>
		<option value="Wayanad">Wayanad</option>
		<option value="Wayanad">Wayanad </option>
		<option value="Wildlife Sanctuary">Wildlife Sanctuary</option>
		<option value="Yercaud">Yercaud</option>
		<option value="Zanskar">Zanskar</option>
	</select>
	</div>
	
	<br>
<div class="row">
<center>
	<div class="col-lg-6 columns pull-left">
		
		<br>
		<center>
		<h3>Departure Date:</h3>
		<input type="text" class="form-control" name="dep_date" placeholder="DD/MM/YYYY">
		</center>
	</div>
	</center>

		<div class="col-lg-6 columns pull-left">
		<br>
		<h3>Return Date:</h3>
		<input type="text" class="form-control" name="return_date" placeholder="DD/MM/YYYY">

	</div>
</div>


<div class="row">
	<div class="col-lg-4 columns">
		<h3>Adults</h3>
		<input class="form-control" type="text" name="adults" placeholder="2" />
	</div>
	
	<div class="col-lg-4 columns">
		<h3>Child</h3>
		<input class="form-control" type="text" name="child" placeholder="2" />
	</div>

	<div class="col-lg-4 columns">
		<h3>Class</h3>
		<select name="class" class="form-control" name="class">
			<option value="Economy">Economy</option>
			<option value="First Class">First Class</option>
		</select>
	</div>
</div>

<div class="row">
<br>
	<center>
	<input type="submit" class="btn btn-primary" name="submit" value="NEXT">
	</center>
</div>

</form>
</center>

</div>
<!-- searching ends here -->

<!-- best packages -->
</div>
</div>

</body>
</html>