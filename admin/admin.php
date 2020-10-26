<!DOCTYPE html>
<?php
session_start();
 if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='admin') {
  header('location: ../login.php');
  }
  include('../database/database_connection.php');


  $sql2="select Count(*) from ordertbl where status=1 and save=0";
  // echo $sql2;
  $con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
  $result1=mysqli_query($con,$sql2)or die("number query moonchi");
  $row=mysqli_fetch_array($result1);
  $cart=$row['Count(*)'];
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BulidNgine</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/BOOT.css">
  <link rel="stylesheet" href="../css/1.css">
  <link rel="stylesheet" href="../css/top.css">

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
  width: 1368px;;
  background-color: rgba(0, 0, 0, 0.4);
  height:100%;
}
.i{ padding-top: 120px;
height: 350px;
width: 500px}

.j{ padding-top: 200px;}

</style>
</head>
<body >
  <main>
<center>
  <div class="p">



    <div class="navbare">
        <a href="../logout.php">Logout</a>
        <a href="orders.php"><i class="fa fa-shopping-cart"></i> orders <span class="numbe"><?php echo "$cart" ?></span></a>
        <a href="#">welcome <?php echo($_SESSION['loginid'] )?></a>
    <div class="dropdowne">
        <button class="dropbtn">Add a product
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdowne-content">
        <a href="motherboard.php">Motherboard</a>
        <a href="cpu.php">CPU</a>
        <a href="gpu.php">GPU</a>
        <a href="ram.php">RAM</a>
        <a href="mem.php">Memory</a>
        <a href="mem_m2.php">Memory M.2</a>
        <a href="smps.php">SMPS</a>
        <a href="cpu_fan.php">CPU Fan</a>
        <a href="cabinet.php">Cabinet</a>
      </div>

    </div>

    <div class="dropdowne">
        <button class="dropbtn">view a product
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdowne-content">
        <a href="onetime/motherboard_one.php">Motherboard</a>
        <a href="onetime/cpu_one.php">CPU</a>
        <a href="onetime/gpu_one.php">GPU</a>
        <a href="onetime/ram_one.php">RAM</a>
        <a href="onetime/mem_one.php">Memory</a>
        <a href="onetime/mem_m2_one.php">Memory M.2</a>
        <a href="onetime/smps_one.php">SMPS</a>
        <a href="onetime/cpu_fan_one.php">CPU Fan</a>
        <a href="onetime/cabinet_one.php">Cabinet</a>
      </div>
    </div>


        <!-- <a href="Motherboard.php">Bulid a PC</a> -->
        <a href="prebulit.php">Prebulit System</a>
        <a href="admin.php">Home</a>
  </div>
  <div class="i">
    A simple PC builder tool for the users. Select parts from the curated list of components,
    to build your desktop computer in a few minutes. Whether you're building a general purpose
     computer or a gaming rig or a PC for photo/video editing, this little tool is going to save
      you some time and effort  </div>

  <br>
  <div class="i">



</div>


    </center>
  </main>

</div>
</body>


</html>
