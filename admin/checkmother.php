<?php
if (isset($_GET['name'])){
	$name = $_GET['name'];
	// require('tables.php');
	$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
	$sql="select name from mothertbl where name = '$name'";
	$result=mysqli_query($con,$sql)or die("query moonchi");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("user row illaathe moonchi");
} else die('user moonchal');
?>