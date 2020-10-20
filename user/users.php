<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='user') {
  header('location: ../login.php');
}include('../database/database_connection.php');

$ide=$_SESSION['loginid'];
$sql2="select Count(*) from ordertbl where loginid='$ide'";
// echo $sql2;
$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
$result1=mysqli_query($con,$sql2)or die("number query moonchi");
$row=mysqli_fetch_array($result1);
$cart=$row['Count(*)'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BulidNgine</title>
  <link rel="stylesheet" href="../css/BOOT.css">
  <link rel="stylesheet" href="../css/1.css">
  <link rel="stylesheet" href="../css/hover.css">

<style>
body
{

  background-image: url('../slide2.jpg');
  position: absolute;
  background-repeat: no-repeat;
  background-size: cover;
  color: white;

}
.p{
  background-color: rgba(0, 0, 0, 0.4);
  height:100%;
}
.i{ padding-top: 200px;
height: 350px;
width: 500px}
.j{  }

</style>
</head>
<body >
  <main>
<center>
  <div class="p">



  <div class="topnav">

    <a href="logout.php">Logout</a>
  <!--  <a href="3.html">Register</a>-->
  <a>welcome <?php echo($_SESSION['loginid'] )?></a>
  <a><i class="fa fa-shopping-cart"></i> CART <span class="numbe"><?php echo($cart)?></span></a>
      <a href="Motherboard.php">Bulid a PC</a>
        <a href="users.php">Home</a>

  </div>
  <div class="i">
A simple PC builder tool for the users. Select parts from the curated list of components, to build your desktop computer in a few minutes. Whether you're building a general purpose computer or a gaming rig or a PC for photo/video editing, this little tool is going to save you some time and effort
  </div>
  <form class="" action="login.php" method="post">
    <input type="submit" class="btn btn-primary"value="Bulid your PC now">
  </form>
  <br>
  <div class="j">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

  </div><div class="j">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

  </div><div class="j">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

  </div>
  </div>

    </center>
  </main>
<?php

 ?>
</body>
</html>
