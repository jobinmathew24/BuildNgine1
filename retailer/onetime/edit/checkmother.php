<?php
if (isset($_GET['name'])){
	$name = $_GET['name'];
	// require('tables.php');
	$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
	$sql="select name from mothertbl where name = '$name' and verified=1";
	$result=mysqli_query($con,$sql)or die("query moonchi");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("user row illaathe moonchi");
}

if (isset($_GET['cpu_name'])){
	$name = $_GET['cpu_name'];
	// require('tables.php');
	$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
	$sql="select name from cpu_tbl where name = '$name' and verified=1";
	$result=mysqli_query($con,$sql)or die("query moonchi");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("user row illaathe moonchi");
}
if (isset($_GET['gpu_name'])){
	$name = $_GET['gpu_name'];
	// require('tables.php');
	$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
	$sql="select name from gpu_tbl where name = '$name' and verified=1";
	$result=mysqli_query($con,$sql)or die("query moonchi");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("user row illaathe moonchi");
}

if (isset($_GET['ram_name'])){
	$name = $_GET['ram_name'];
	// require('tables.php');
	$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
	$sql="select name from ram_tbl where name = '$name' and verified=1";
	$result=mysqli_query($con,$sql)or die("query moonchi");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("user row illaathe moonchi");
}

if (isset($_GET['mem_type'])){
	$name = $_GET['mem_type'];
	// require('tables.php');
	$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
	$sql="select name from memory_tbl where name = '$name' and verified=1";
	$result=mysqli_query($con,$sql)or die("query moonchi");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("user row illaathe moonchi");
}
if (isset($_GET['smps'])){
	$name = $_GET['smps'];
	// require('tables.php');
	$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
	$sql="select name from smps_tbl where name = '$name'  and verified=1";
	$result=mysqli_query($con,$sql)or die("query moonchi");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("usser row illaathe moonchi");
}

if (isset($_GET['cpu_fan'])){
	$name = $_GET['cpu_fan'];
	// require('tables.php');
	$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
	$sql="select name from cpu_fan_tbl where name = '$name' and verified=1";
	$result=mysqli_query($con,$sql)or die("query moonchi");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("usser row illaathe moonchi");
}

if (isset($_GET['Cabinet'])){
	$name = $_GET['Cabinet'];
	// require('tables.php');
	$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
	$sql="select name from cabinet_tbl where name = '$name'  and verified=1";
	$result=mysqli_query($con,$sql)or die("query moonchi");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("usser row illaathe moonchi");
}


?>
