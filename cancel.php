<?php
include "include.php";

session_start();

$del="Delete from `booking` where user='".$_SESSION['user']."' and Bus_id='".$_GET['Bus_id']."'";
$req= $_GET['req'];
$id=$_GET['Bus_id'];
$upd= "UPDATE bus SET seats=(seats+$req) WHERE Id=$id";

mysqli_query($db_handle,$del) or die(mysqli_error($db_handle));
mysqli_query($db_handle,$upd) or die(mysqli_error($db_handle));

//echo "registered succesfully";
	//$_SESSION['user']=$_POST["Username"];
	$_SESSION['del'] = 'Cancelled succesfully...Rs.';
	$_SESSION['refund']=$_GET['Fare'];
	$_SESSION['mesg']=' will be refunded!!';
	header('location: cancel1.php');
//echo '<script language="javascript">document.location.href="web_home.php"</script>';
?>