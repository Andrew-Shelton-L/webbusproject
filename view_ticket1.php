<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ticket</title>
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
h2{
	color:red;
}
h4
{
	color:white;
}
td{
	color:white;
}
body{
	background-image: url('images/pic06.jpg');
	}
		</style>
	</head>
	<?php session_start();?>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">BookMyBus</a></h1>
				<center><i><font  size="35"><strong>Hello <?php echo $_SESSION['user']?></font></i></strong></center>
				<nav id="nav">
				
					<ul>
							<li><a href="generic.php">Home</a></li>
					<!--	<li><a href="#book">Book Now</a></li>-->
					<!--	<li><a href="history1.php">Booking History</a></li>-->
						<li><a href="profile.php">View Profile</a></li>
					<!--	<li><a href="update.php">Update Profile</a></li>	-->
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</header>
			<div class="container">
				
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					
			</div>
<center>	<h2>Your Ticket</h2> </center>

<?php
	if(isset($_SESSION['pay']))
	{
		echo '<p class="message"> <font size="5" color="white"> <center><i>';
		echo $_SESSION['pay'];
		echo "</i></center></font></p>";
		unset($_SESSION['pay']);
	}
include "include.php";
//$user=$_SESSION['user'];
$Bus_id=$_SESSION['Bus_id'];;
$sel="SELECT * FROM `booking` where Bus_id= '".$_SESSION['Bus_id']."' AND user= '".$_SESSION['user']."'" ;
$str= mysqli_query($db_handle,$sel);
$rows= mysqli_num_rows($str);
if($rows==0 || $rows>1)
{
	//header('Refresh:5; url=generic.php');

	echo '<h3 style= "text-align:center;"> <font color="red">Data Base Error </font></h3>';
	echo "<br>";
	echo '<p style= "text-align:center">Redirecting to the home page in 5 seconds</p>';
}
else
{

	while($row=mysqli_fetch_array($str))
{

	$query2="SELECT * FROM `bus` where Id='".$row['Bus_id']."'" ;
	$str1= mysqli_query($db_handle,$query2);
	$row2= mysqli_fetch_array($str1);

	echo '<div class="container">';
	echo '<table style="width:100%" align="center">';

	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Date of Booking:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Date'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Bus Name:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Name'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Origin:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Origin'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Destination:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Destination'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Arrival time:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Arrival_time'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Departure time:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Departure_time'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Date of journey:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Date'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>No of seats:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Seats_no'];
		$req=$row['Seats_no'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Total fare:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Total_fare'];
		$fare=$row['Total_fare'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Bank:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Bank'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Payment method:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Payment_method'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Food selected(Code):</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['foid'];
		echo "</td>";
	echo "</tr>";
	echo "</table>";
	echo '<a href="cancel.php?Bus_id='.$Bus_id.' & Fare='.$fare.' & req='.$req.'"><center><h2>Cancel Ticket</h2></center></a>';
	echo "</div>";
}
}
?>

<br>

</div>
	
	</body>
</html>
