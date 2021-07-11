<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='user') {
  header('location: ../login.php');
}
include('../database/connection.php');

$ide=$_SESSION['loginid'];


$sql2="select Count(*) from ordertbl where loginid='$ide' and status=1  and save=0 and buy=0";
$sql5="select Count(*) from ordertbl where loginid='$ide' and status=1 and save=1 and buy=0";

// // echo $sql2;

$result1=mysqli_query($con,$sql2)or die("number query moonchi");

$result4=mysqli_query($con,$sql5)or die("number query moonchi");
$row=mysqli_fetch_array($result1);

$rowse=mysqli_fetch_array($result4);
$cart=$row['Count(*)'];
$save=$rowse['Count(*)'];



$sql4="select count(*) from shipping_add where loginid='$ide'";
$result3=mysqli_query($con,$sql4)or die("number query moonchi");
$row=mysqli_fetch_array($result3);

$add_count=$row['count(*)'];
if(isset($_POST['submit'])){
  $ap="update logintable set status=0,usertype='retailer' where loginid='$ide'";
  mysqli_query($con,$ap)or die($ap);
  header('location:users.php');
}
?>
<html lang="en">

<head>

    <title>Wants to tell</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/top.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "../css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->

</head>

<body>
  <?php
  include('../php/main_header.php');
   ?>

<center>
  <br>
  <br>
  <br>
  <br>
<h2>Want to be A Retailer</h2>
<br>
<a href="users.php">Go Home</a>
<br>
<br>
<form class="" action="" method="post">
  <input type="checkbox" required name="" value=""> By clicking this box you are agreeing our terms and polices.<br>
  And from now on the previlage is now Retailer,<br>
  you should wait for admin comformation.<br>
  <br>
  <input type="submit" class="btn btn-success" name="submit" value="I agree the terms">
</form>
</center>
</body>
