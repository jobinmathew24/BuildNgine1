<!DOCTYPE html>
<?php
session_start();
 if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='retailer') {
  header('location: ../login.php');
  }
  include('../database/database_connection.php');
  $id=$_SESSION['loginid'];

  $sql2="select Count(*) from ordertbl where status=1 and save=0";
  // echo $sql2;
  $con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
  $result1=mysqli_query($con,$sql2)or die("number query moonchi");
  $row=mysqli_fetch_array($result1);


  $sql="select distinct(`cpu_pow`) from `smps_tbl` where verified =1 order by `cpu_pow` desc";
  $sql_cpu_pow=mysqli_query($con,$sql);

  $sql="select distinct(`sata_count`) from `smps_tbl` where verified =1  order by `sata_count` asc";
  $sql_sata_count=mysqli_query($con,$sql);

  $sql="select distinct(`pci_count`) from `smps_tbl` where verified =1  order by `pci_count` asc";
  $sql_pci_count=mysqli_query($con,$sql);





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
  </head>
  <script type="text/javascript">
  function check() {
    var smps = document.getElementById('name').value;
          if (!smps) return;
          console.log("WORKING user TILL HERE");
          var ajax = new XMLHttpRequest();
          ajax.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200 ){
              console.log(this.response); //helps SEE WHATS GOING ON in the php file;
              if(this.response=='TRUE'){
                  document.getElementById('nameid').innerHTML="SMPS name is already entered";
                  document.getElementById('name').value="";
                  document.forms["smps_tbl"]["name"].focus();
              }
              else{
                  document.getElementById('nameid').innerHTML="";

              }
            }
          }
          ajax.open("GET", "checkmother.php?smps="+smps, true);
          ajax.send();

}

  </script>
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
      <a href="retailer.php">Home</a>
  </div>
  <center>
    <div class="container">
      <br>

      <form action="" method="post" name="smps_tbl" enctype="multipart/form-data" class="form-group-sm container"  >
        <h2 style="float: center;">New SMPS Memory</h2 >
          <hr>
          <h6>Try to use accurate data</h6>
          <h6>(Try using <strong>CAPITAL</strong> letters)</h6>
        <hr>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholder="SMPS Name" name="name" id="name" value=""><br>
        <span id='nameid'></span>
        <input type="text" class="form-control" style="width:450px;" required  placeholder="SMPS company" name="company"  value=""><br>
        <input type="number" class="form-control" style="width:450px;" required  placeholder="SMPS Power" name="power"  value=""><br>
        <select class="form-control" type="button" style="width:450px;" name="cpu_pow" required>

                      <option value="">Select the SMPS CPU Power Connector</option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_cpu_pow ))
                           {
                               echo "<option value='".$data_ram['cpu_pow']."'>" .$data_ram['cpu_pow'] ." </option>";
                           }
                            ?>

        </select><br>
        <input type="number" class="form-control" style="width:450px;" required  placeholder="SMPS Motherboard Power" name="mb_pow"  value=""><br>
        <select class="form-control" type="button" style="width:450px;" name="sata_count" required>

                      <option value="">Select the SMPS SATA Power Cable</option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_sata_count))
                           {
                               echo "<option value='".$data_ram['sata_count']."'>" .$data_ram['sata_count'] ." Nos </option>";
                           }
                            ?>

        </select><br>
        <select class="form-control" type="button" style="width:450px;" name="pci_count" required>

                      <option value="">Select the SMPS PCIe Power Cable</option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_pci_count))
                           {
                               echo "<option value='".$data_ram['pci_count']."'>" .$data_ram['pci_count'] ." Nos </option>";
                           }
                            ?>

        </select><br>
          <input type="number" class="form-control" style="width:450px;" required placeholder="SMPS price" name="price" value="">
        <!-- Select image to upload: -->
        <span >Choose the image </span> <input type="file" style="width:450px;" required class="form-control" name="image" id="file" value="">
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
  $power=$_POST['power'];
  $cpu_pow=$_POST['cpu_pow'];
  $mb_pow=$_POST['mb_pow'];
  $sata_count=$_POST['sata_count'];
  $pci_count=$_POST['pci_count'];
  $price=$_POST['price'];
  $pic=$_FILES['image']['name'];

  $sql="insert into `smps_tbl`(`name`, `company`,`power`,`cpu_pow`,`mb_pow`, `sata_count`,`pci_count`, `price`,`sold_by`, `pic`) VALUES
                              ('$name','$company',$power,'$cpu_pow','$mb_pow',$sata_count,$pci_count,$price,'$id','$pic')";
// echo "$sql";
if($result1=mysqli_query($con,$sql)){
  $target_dir = "../project/smps/";
  $target_path=$target_dir.$pic;
  move_uploaded_file($_FILES['image']['tmp_name'],$target_path);
  echo "<script>alert('Data inserted Sucessfully');</script>";
header('location:retailer.php');
}
else {
  echo $sql ;
  // echo "<script>alert('Data not inserted');</script>";
}
} ?>
</html>
