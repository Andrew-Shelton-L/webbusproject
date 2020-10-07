<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />

        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css1/style.css" />
		<script src="js1/modernizr.custom.63321.js"></script>
       		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	<style>
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(images1/blurred.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;

				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
			a {
    			color: hotpink;
				}
			h1 {
    			color:white;
				}
		</style>
    </head>
    <body>
    		<header id="header">
				<h1><a href="index.php">BookMyBus</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
				
						<li><a href="index4.php">Users</a></li>
				
						
					</ul>
				</nav>
			</header>
<div class="container">
	<table >
		<?php
		session_start();
		if(isset($_SESSION['error']))
		{
			echo '<p class="message"> <font size="5" color="MediumMagenta"> <center><i>';
			echo $_SESSION['error'];
			echo "</i></center></font></p>";
			unset($_SESSION['error']);
		}
		if(isset($_SESSION['reg_error']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center><i>';
			echo $_SESSION['reg_error'];
			echo "</i> </center></font></p>";
			unset($_SESSION['reg_error']);
		}
		?>

	</table>


<section class="main">
<form action="register.php" method ="POST" class="form-4" >
				 <h1>Register</h1>
	First name
<input class="form-control" name="Fname" placeholder="eg:Johann" type="text">
	Last name
<input class="form-control" name="Lname" placeholder="eg:Bach" type="text">
 Email
<input class="form-control" name="Email" placeholder="eg:johannes@yaho.com" type="email">

	Username
<input class="form-control" name="Username" placeholder="choose a username" type="text">

    Password
<input class="form-control" name="Password" placeholder="choose a password" type ="password">
  Name of your primary school?
<input class="form-control" name="Security" placeholder="please answer the security question" type ="text">

 <input type="submit" class="btn btn-primary" name="sub" value="Register">
</form>
			</section>

        </div>
    </body>
</html>
