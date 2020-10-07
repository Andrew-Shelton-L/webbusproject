<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Payment</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<style type="text/css">

input    {
width:375px;
display:block;
border: 1px solid #999;
height: 25px;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
input.button {
width:100px;
position:absolute;
right:20px;
bottom:20px;
background:#09C;
color:#fff;
font-family: Tahoma, Geneva, sans-serif;
height:30px;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
border: 1p solid #999;
}
input.button:hover {
background:#fff;
color:#09C;
}
form    {
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
margin:auto;
position:relative;
width:550px;
height:450px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: italic;
line-height: 24px;
font-weight: bold;
color: #000000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}

input::-webkit-input-placeholder {
  color: 	#f00;
}
textarea#feedback {
width:375px;
height:150px;
}
textarea.message {
display:block;
}
h2
{
	color:red;
}
.note{
	color:red;
}
		</style>
	</head>
	<body style="background: -webkit-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(0,212,255,1) 4%, rgba(9,9,121,1) 87%);">
	<?php
		session_start();


		$_SESSION['Total_fare']=$_GET['Total_fare'];
		$_SESSION['Bus_id']=$_GET['Bus_id'];
		$_SESSION['Seats_no']=$_GET['Seats_no'];
		?>
		<!-- Header -->
			<header id="header">
				<h1><a href="index.php" onclick="alert('You have canceled the transaction')">BookMyBus</a></h1>
				<center><i><font size="35"><strong>Hello <?php echo $_SESSION['user']?></font></i></strong></center>
				<nav id="nav">
					<ul>
						<li><a href="generic.php">Home</a></li>
					<!--	<li><a href="#book">Book Now</a></li>-->
						<li><a href="profile.php">View Profile</a></li>
					<!--	<li><a href="update.php">Update Profile</a></li>	-->
						<li><a href="logout.php">Logout</a></li>
						
					</ul>
				</nav>
			</header>
			<div class="container">
		

			<center>	<h2>Payment</h2> </center>
	<form action="book.php" method="POST">
 		 Select a bank
  
  			<select name="Bank" class="form-control">
  				<option value="SBI">SBI</option>
  				<option value="Standard Chartered">Standard Chartered</option>
  				<option value="ABC">ABC Bank</option> </select>
				  <br>
				  
  		Choose a payment method
 
			<select name="Payment_method" class="form-control">
  				<option value="Net Banking">Net Banking</option>
  				<option value="Debit card">Debit card</option> </select>
				  <br>
		 Select Food
  			<select name="Food" class="form-control">
	  			<option value="0" default>select one</option>
	  			<option value="1">Burger</option>
	  			<option value="2">Pizza</option>
	  			<option value="3">French Fries</option>
			</select>	</br>	  


  		<p> <i>Total Fare: <?php echo $_GET['Total_fare'] ?>(excluding food charges)</i></p>
			  <br>
			  
		
  		<input class="btn btn-primary" type="submit" value="Submit">
  
	</form>
	<div class="note"><center>NOTE:Food Charges May be Collected in Journey</center></div>
<br>

</div>
	</body>
</html>
