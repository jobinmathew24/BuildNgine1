<?php
session_start();
$id=$_SESSION['loginid'];
unset($_SESSION['socket']);
unset($_SESSION['cpu_pow']);
unset($_SESSION['ram_type']);
unset($_SESSION['max_pow']);
unset($_SESSION['m2_count']);
unset($_SESSION['cpuname']);
unset($_SESSION['ramname']);
unset($_SESSION['gpuname']);
unset($_SESSION['memname']);
unset($_SESSION['smpsname']);
$_SESSION['loginid']=$id;
header('location: users.php');
 ?>
