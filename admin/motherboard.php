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

  $sql="select distinct(`socket`) from `mothertbl` order by `socket` desc";
  $sql_socket=mysqli_query($con,$sql);

  $sql="select distinct(`ram_type`) from `mothertbl` order by `ram_type` desc";
  $sql_ram=mysqli_query($con,$sql);

// $loc="SELECT * FROM tbl_location WHERE is_delete=1";
// $result_loc=mysqli_query($con,$loc);
  $cart=$row['Count(*)'];
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BulidNgine</title>
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/top.css">
    <!-- <link rel="stylesheet" href="../css/BOOT.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "../css/jquery-ui.css" rel = "stylesheet">
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
  <center>
    <div class="container">
      <br>
      <h2 style="float: center;">New Motherboard</h2 >
        <hr>
        <h6>Try to use accurate data</h6>
      <form form action="motherupload.php" method="post" enctype="multipart/form-data" class="form-group-sm container"  >
        <br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="Motherboard Name" name="name" value=""><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="Motherboard Company" name="company" value=""><br>
        <select class="form-control" type="button" style="width:450px;" name="socket" required>

                      <option value="">Select the Socket</option>
                        <?php

                           while($data_socket=mysqli_fetch_array($sql_socket))
                           {
                               echo "<option value='".$data_socket['socket']."'>" .$data_socket['socket'] ."</option>";
                           }
                            ?>

        </select><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="Motherboard Form Factor" name="factor" value=""><br>
        <select class="form-control" type="button" style="width:450px;" name="ram_type" required>

                      <option value="">Select the RAM Type</option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_ram))
                           {
                               echo "<option value='".$data_ram['ram_type']."'>" .$data_ram['ram_type'] ."</option>";
                           }
                            ?>

        </select><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard Max RAM in Gb" name="max_ram" value=""><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard PCIe Count" name="pcie" value=""><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard Power Pin" name="mb_pow" value=""><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard CPU Power Pin" name="cpu_pow" value=""><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="Motherboard Chipset" name="chipset" value=""><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard RAM Slot Count" name="ram_count" value=""><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard SATA Slot Count" name="sata_count" value=""><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard M.2 Slot Count" name="m2_count" value=""><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard Max Freq" name="max_freq" value=""><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="Motherboard Purpose" name="purpose" value=""><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard price" name="price" value=""><br>
        <!-- Select image to upload: -->
        <input type="file" style="width:450px;" class="form-control" name="image" id="file" value="">
        <br>
        <input type="submit" name="submit" class="btn btn-success" value="Submit">
        <input type="reset" name="reset" class="btn btn-danger" value="Reset">
        <hr>
        <br>
        <br>
      </form>
    </div>
  </center>
</body>
<?php
if(isset($_POST['submit'])){

  $name=$_POST['name'];
  $company=$_POST['company'];
  $name=$_POST['socket'];
  $name=$_POST['factor'];
  $name=$_POST['ram_type'];
  $name=$_POST['max_ram'];
  $name=$_POST['name'];
} ?>
</html>
