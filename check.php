<?php
if (isset($_GET['username'])){
	$username = $_GET['username'];
	// require('tables.php');
	$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
	$sql="select loginid from logintable where loginid = '$username'";
	$result=mysqli_query($con,$sql)or die("query moonchi");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("row illaathe moonchi");
} else die('moonchal');
?>
