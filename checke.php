<?php
if (isset($_GET['email'])){
	$email = $_GET['email'];
	// require('tables.php');
	$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
	$sql="select email from user_login where email = '$email'";
	$result=mysqli_query($con,$sql)or die("query moonchi");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("email row illaathe moonchi");
} else die('email moonchal');
 ?>
