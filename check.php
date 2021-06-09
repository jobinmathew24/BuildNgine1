<?php
if (isset($_GET['username'])){
	$username = $_GET['username'];
	// require('tables.php');
	include('database/connection.php');
	
	$sql="select loginid from logintable where loginid = '$username'";
	$result=mysqli_query($con,$sql)or die("query moonchi");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("user row illaathe moonchi");
} else die('user moonchal');
?>
