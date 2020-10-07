<?php
include "include.php";

$pass=sha1($_POST["Password"]);
$sel="SELECT * FROM `user` where Email='".$_POST["Email"]."'";
$uname="SELECT * FROM `user` where Username='".$_POST["Username"]."'";
$res=mysqli_query($db_handle,$sel) or die(mysqli_error($db_handle));
$res1=mysqli_query($db_handle,$uname) or die(mysqli_error($db_handle));
	if(mysqli_num_rows($res1) > 0)
	{
		echo '<script language=javascript>alert("User Name Already registered click ok to redirect");</script>';
		header('refresh:0;url=register1.php');
	}
	  if(mysqli_num_rows($res) == 0)
		{
		 $mail=$_POST["Email"];
		 if(empty($mail)==false)
			{

				$ins="INSERT INTO `user`(`Fname`,`Lname`,`Email`,`Username`,`Password`,`Security`)VALUES('".$_POST['Fname']."','".$_POST['Lname']."','".$_POST['Email']."','".$_POST['Username']."','$pass','".$_POST['Security']."')";

				mysqli_query($db_handle,$ins) or die(mysqli_error($db_handle));

					//echo "registered succesfully";
				session_start();
					//$_SESSION['user']=$_POST["Username"];
				$_SESSION['reg'] = 'Registered succesfully...Login now!!';
				header('location: index4.php');
			}
		 else
			{
				session_start();
				$_SESSION['reg_error'] = 'Invalid email!!';
				header('location: index4.php');
			}
//echo '<script language="javascript">document.location.href="web_home.php"</script>';
		}
	 else
		{
			session_start();
			$_SESSION['reg_error'] = 'Email registered already!!';
			header('location: register1.php');
		}
	
?>