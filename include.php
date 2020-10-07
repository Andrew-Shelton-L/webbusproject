<?php 
$db="bus_booking_system";
//$connec= new PDO('mysql:host=localhost;dbname=bus_booking_system', 'root', '');
$db_handle = mysqli_connect("localhost", "root", "");
$db_found = mysqli_select_db( $db_handle, $db);
 ?>