<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='retailer') {
 header('location: ../../../login.php');
 }
 if (!isset($_SESSION['motherboard_edit']))
 {
   header('location:../../onetime/Motherboard_one.php');
   }

 include('../../../database/database_connection.php');
 $id=$_SESSION['loginid'];
$motherboard_name=$_SESSION['motherboard_edit'];

  $sql2="select Count(*) from ordertbl where status=1 and save=0";
  // echo $sql2;
  $con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
  $result1=mysqli_query($con,$sql2)or die("number query moonchi");
  $row=mysqli_fetch_array($result1);

  $sql="select distinct(`socket`) from `mothertbl` where verified =1 order by `socket` desc";
  $sql_socket=mysqli_query($con,$sql);

  $sql="select distinct(`ram_type`) from `mothertbl` where verified =1 order by `ram_type` desc";
  $sql_ram=mysqli_query($con,$sql);

  $sql="select distinct(`purpose`) from `mothertbl` where verified =1 order by `purpose` desc";
  $sql_pur=mysqli_query($con,$sql);

  $sql="select distinct(`max_ram`) from `mothertbl` where verified =1 order by `max_ram` desc";
  $sql_max=mysqli_query($con,$sql);


  $sql3="select * from mothertbl where name='$motherboard_name'";
  $result_cab=mysqli_query($con,$sql3)or die("number query moonchi");
  $n=mysqli_num_rows($result_cab);
          if($n==0){
            header('location:../../onetime/motherboard_one.php');
          }
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
    <script src="../../../js/jquery-1.10.2.min.js"></script>
    <script src="../../../js/jquery-ui.js"></script>
    <script src="..././../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/top.css">
    <!-- <link rel="stylesheet" href="../css/BOOT.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "../../../css/jquery-ui.css" rel = "stylesheet">
  </head>
  <script type="text/javascript">
  function check() {
    var name = document.getElementById('name').value;
          if (!name) return;
          console.log("WORKING user TILL HERE");
          var ajax = new XMLHttpRequest();
          ajax.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200 ){
              console.log(this.response); //helps SEE WHATS GOING ON in the php file;
              if(this.response=='TRUE'){
                  document.getElementById('nameid').innerHTML="Motherboard name is already entered";
                  document.getElementById('name').value="";
                  document.forms["mothertbl"]["name"].focus();
              }
              else{
                  document.getElementById('nameid').innerHTML="";

              }
            }
          }
          ajax.open("GET", "checkmother.php?name="+name, true);
          ajax.send();

}

  </script>
  <div class="navbare">
      <a href="logout.php">Logout</a>
      <a href="#">welcome <?php echo($_SESSION['loginid'] )?></a>


      <div class="dropdowne">
          <button class="dropbtn">view a product
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdowne-content">
          <a href="../../onetime/motherboard_one.php">Motherboard</a>
          <a href="../../onetime/cpu_one.php">CPU</a>
          <a href="../../onetime/gpu_one.php">GPU</a>
          <a href="../../onetime/ram_one.php">RAM</a>
          <a href="../../onetime/mem_one.php">Memory</a>
          <a href="../../onetime/mem_m2_one.php">Memory M.2</a>
          <a href="../../onetime/smps_one.php">SMPS</a>
          <a href="../../onetime/cpu_fan_one.php">CPU Fan</a>
          <a href="../../onetime/cabinet_one.php">Cabinet</a>
        </div>
      </div>


          <a href="../../retailer.php">Home</a>
      </div>
  <center>
    <div class="container">
      <br>
<?php foreach($result_cab as $row){ ?>
      <form action="" method="post" name="mothertbl" enctype="multipart/form-data" class="form-group-sm container"  >
        <h2 style="float: center;">New Motherboard</h2 >
          <hr>
          <h6>Try to use accurate data</h6>
          <h6>(Try using <strong>CAPITAL</strong> letters)</h6>
        <hr>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholder="Motherboard Name" name="name" id="name" value="<?php echo $row['name']; ?>"><br>
        <span id='nameid'></span>
        <input type="text" class="form-control" style="width:450px;" required placeholder="Motherboard Company" name="company" value="<?php echo $row['company']; ?>"><br>
        <select class="form-control" type="button" style="width:450px;" name="socket" required>

                      <option value="<?php echo $row['socket']; ?>"><?php echo $row['socket']; ?></option>
                        <?php

                           while($data_socket=mysqli_fetch_array($sql_socket))
                           {
                               echo "<option value='".$data_socket['socket']."'>" .$data_socket['socket'] ."</option>";
                           }
                            ?>

        </select><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="Motherboard Form Factor" name="factor" value="<?php echo $row['form_factor']; ?>"><br>
        <select class="form-control" type="button" style="width:450px;" name="ram_type" required>

                      <option value="<?php echo $row['ram_type']; ?>"><?php echo $row['ram_type']; ?></option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_ram))
                           {
                               echo "<option value='".$data_ram['ram_type']."'>" .$data_ram['ram_type'] ."</option>";
                           }
                            ?>

        </select><br>
        <select class="form-control" type="button" style="width:450px;" name="max_ram" required>

                      <option value="<?php echo $row['max_ram']; ?>"><?php echo $row['max_ram']; ?></option>
                        <?php

                           while($data_max=mysqli_fetch_array($sql_max))
                           {
                               echo "<option value='".$data_max['max_ram']."'>" .$data_max['max_ram'] ." Gb</option>";
                           }
                            ?>

        </select><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard PCIe Count" name="pcie" value="<?php echo $row['pcie_count']; ?>"><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard Power Pin" name="mb_pow" value="<?php echo $row['mb_pow']; ?>"><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard CPU Power Pin" name="cpu_pow" value="<?php echo $row['cpu_pow']; ?>"><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="Motherboard Chipset" name="chipset" value="<?php echo $row['chipset']; ?>"><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard RAM Slot Count" name="ram_count" value="<?php echo $row['ram_count']; ?>"><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard SATA Slot Count" name="sata_count" value="<?php echo $row['sata_count']; ?>"><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard M.2 Slot Count" name="m2_count" value="<?php echo $row['m2_count']; ?>"><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard Max Freq" name="max_freq" value="<?php echo $row['max_freq']; ?>"><br>
        <select class="form-control" type="button" style="width:450px;" name="purpose" required>

                      <option value="<?php echo $row['purpose']; ?>"><?php echo $row['purpose']; ?></option>
                        <?php

                           while($data_pur=mysqli_fetch_array($sql_pur))
                           {
                               echo "<option value='".$data_pur['purpose']."'>" .$data_pur['purpose'] ."</option>";
                           }
                            ?>

        </select><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Motherboard price" name="price" value="<?php echo $row['price']; ?>">
        <!-- Select image to upload: -->
        <span >Choose the image </span> <input type="file" accept="image/jpeg" style="width:450px;" required class="form-control" name="image" id="file" value="">
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
}
if(isset($_POST['submit'])){

  $name=$_POST['name'];
  $company=$_POST['company'];
  $socket=$_POST['socket'];
  $factor=$_POST['factor'];
  $ram_type=$_POST['ram_type'];
  $max_ram=$_POST['max_ram'];
  $pcie=$_POST['pcie'];
  $mb_pow=$_POST['mb_pow'];
  $cpu_pow=$_POST['cpu_pow'];
  $chipset=$_POST['chipset'];
  $ram_count=$_POST['ram_count'];
  $sata_count=$_POST['sata_count'];
  $m2_count=$_POST['m2_count'];
  $max_freq=$_POST['max_freq'];
  $purpose=$_POST['purpose'];
  $price=$_POST['price'];
  $pic=$_FILES['image']['name'];

  $sql="update `mothertbl` set `name`='$name', `company`='$company', `socket`='$socket', `form_factor`='$factor', `ram_type`='$ram_type',
  `max_ram`=$max_ram, `pcie_count`=$pcie, `mb_pow`=$mb_pow, `cpu_pow`=$cpu_pow, `chipset`='$chipset', `ram_count`=$ram_count, `sata_count`=$sata_count,
  `m2_count`=$m2_count, `max_freq`=$max_freq, `purpose`='$purpose', `price`=$price, `pic`='$name.jpg' where `name`='$motherboard_name'";

// echo "$sql";
if($result1=mysqli_query($con,$sql)){
  $target_dir = "../../../project/mother/";
  $target_path=$target_dir.$name.".jpg";
  move_uploaded_file($_FILES['image']['tmp_name'],$target_path);
  echo "<script>alert('Data Sucessfully Updated');</script>";
  echo "<script>window.location.reload();</script>";
}
else {
  echo "<script>alert('Data not inserted');</script>";
}
} ?>
</html>
