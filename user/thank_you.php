<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='user') {
  header('location: ../login.php');
}
if (!isset($_SESSION['orderid'])) {
header('location:users.php');
}
include('../database/connection.php');
$ide=$_SESSION['loginid'];

// session_unset($_SESSION['orderid']);

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

?>
<html lang="en">

<head>

    <title>Thank you</title>
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
<h2>Payment Complete</h2>
<br>
<a href="users.php">Go Home</a>
<br>
<h4>Your order <b><?php echo $_SESSION['name']; ?></b> will be process soon.</h4>
</center>
</body>
</html>
