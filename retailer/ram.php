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


  $sql="select distinct(`ram_size`) from `ram_tbl` where verified =1 order by `ram_size` desc";
  $sql_ram_size=mysqli_query($con,$sql);

  $sql="select distinct(`ram_type`) from `ram_tbl` where verified =1 order by `ram_type` desc";
  $sql_ram_type=mysqli_query($con,$sql);




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
    var ram_name = document.getElementById('name').value;
          if (!ram_name) return;
          console.log("WORKING user TILL HERE");
          var ajax = new XMLHttpRequest();
          ajax.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200 ){
              console.log(this.response); //helps SEE WHATS GOING ON in the php file;
              if(this.response=='TRUE'){
                  document.getElementById('nameid').innerHTML="RAM name is already entered";
                  document.getElementById('name').value="";
                  document.forms["ram_tbl"]["name"].focus();
              }
              else{
                  document.getElementById('nameid').innerHTML="";

              }
            }
          }
          ajax.open("GET", "checkmother.php?ram_name="+ram_name, true);
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

      <form action="" method="post" name="ram_tbl" enctype="multipart/form-data" class="form-group-sm container"  >
        <h2 style="float: center;">New RAM</h2 >
          <hr>
          <h6>Try to use accurate data</h6>
          <h6>(Try using <strong>CAPITAL</strong> letters)</h6>
        <hr>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholder="RAM Name" name="name" id="name" value=""><br>
        <span id='nameid'></span>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholder="RAM company" name="company"  value=""><br>

        <select class="form-control" type="button" style="width:450px;" name="ram_type" required>

                      <option value="">Select the RAM Type</option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_ram_type ))
                           {
                               echo "<option value='".$data_ram['ram_type']."'>" .$data_ram['ram_type'] ."</option>";
                           }
                            ?>

        </select><br>
        <select class="form-control" type="button" style="width:450px;" name="ram_size" required>

                      <option value="">Select the RAM Size</option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_ram_size ))
                           {
                               echo "<option value='".$data_ram['ram_size']."'>" .$data_ram['ram_size'] ." Gb</option>";
                           }
                            ?>

        </select><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="RAM Memory Frequency" name="mem_freq" value=""><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="FSB" name="fsb" value=""><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="RAM Voltage" name="voltage" value=""><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="RAM Timing" name="timing" value=""><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="RAM price" name="price" value="">
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
  $ram_type=$_POST['ram_type'];
  $ram_size=$_POST['ram_size'];
  $mem_freq=$_POST['mem_freq'];
  $fsb=$_POST['fsb'];
  $voltage=$_POST['voltage'];
  $timing=$_POST['timing'];
  $price=$_POST['price'];
  $pic=$_FILES['image']['name'];

  $sql="insert into `ram_tbl`(`name`, `company`, `ram_type`, `ram_size`, `mem_freq`, `fsb`, `voltage`, `timing`, `price`,`sold_by`, `pic`) VALUES ('$name','$company','$ram_type',$ram_size,$mem_freq,'$fsb',$voltage,'$timing',$price,'$id','$pic')";
// echo "$sql";
if($result1=mysqli_query($con,$sql)){
  $target_dir = "../project/ram/";
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