<?php
include "include.php";

session_start();
echo $_SESSION['Bus_id'];
$ins="INSERT INTO `booking`(`user`,`Bus_id`,`Seats_no`,`Total_fare`,`Bank`,`Payment_method`,`foid`)VALUES('".$_SESSION['user']."','".$_SESSION['Bus_id']."','".$_SESSION['Seats_no']."','".$_SESSION['Total_fare']."','".$_POST['Bank']."','".$_POST['Payment_method']."','".$_POST['Food']."')";
$req=$_SESSION['Seats_no'];
$id = $_SESSION['Bus_id'];

$upd= "UPDATE bus SET seats=(seats-$req) WHERE Id=$id";

// insert into booking
// train setas decrease

mysqli_query($db_handle,$ins) or die(mysqli_error($db_handle));
mysqli_query($db_handle,$upd) or die(mysqli_error($db_handle));

//echo "registered succesfully";
	//$_SESSION['user']=$_POST["Username"];
	$_SESSION['pay'] = 'Payment successful...';
	header('location: view_ticket1.php');
?>