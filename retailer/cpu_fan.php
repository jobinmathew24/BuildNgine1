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


  $sql="select distinct(`cooler_type`) from `cpu_fan_tbl` where verified =1 order by `cooler_type` desc";
  $sql_cooler_type=mysqli_query($con,$sql);







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
    var cpu_fan = document.getElementById('name').value;
          if (!cpu_fan) return;
          console.log("WORKING user TILL HERE");
          var ajax = new XMLHttpRequest();
          ajax.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200 ){
              console.log(this.response); //helps SEE WHATS GOING ON in the php file;
              if(this.response=='TRUE'){
                  document.getElementById('nameid').innerHTML="CPU Fan name is already entered";
                  document.getElementById('name').value="";
                  document.forms["cpu_fan_tbl"]["name"].focus();
              }
              else{
                  document.getElementById('nameid').innerHTML="";

              }
            }
          }
          ajax.open("GET", "checkmother.php?cpu_fan="+cpu_fan, true);
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

      <form action="" method="post" name="cpu_fan_tbl" enctype="multipart/form-data" class="form-group-sm container"  >
        <h2 style="float: center;">New CPU Fan </h2 >
          <hr>
          <h6>Try to use accurate data</h6>
          <h6>(Try using <strong>CAPITAL</strong> letters)</h6>
        <hr>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholder="CPU Fan Name" name="name" id="name" value=""><br>
        <span id='nameid'></span>
        <input type="text" class="form-control" style="width:450px;" required  placeholder="CPU Fan company" name="company"  value=""><br>
        <select class="form-control" type="button" style="width:450px;" name="cooler_type" required>

                      <option value="">Select the  CPU Fan Cooler Type </option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_cooler_type ))
                           {
                               echo "<option value='".$data_ram['cooler_type']."'>" .$data_ram['cooler_type'] ." </option>";
                           }
                            ?>

        </select><br>
        <input type="text" class="form-control" style="width:450px;" required  placeholder="CPU Fan Compatible Sockets" name="socket"  value=""><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="CPU Fan Max TDP" name="max_tdp" value=""><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="CPU Fan Price" name="price" value="">
        <!-- Select image to upload: -->
        <span >Choose the image </span> <input type="file" style="width:450px;" required accept="image/jpeg" class="form-control" name="image" id="file" value="">
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
  $cooler_type=$_POST['cooler_type'];
  $socket=$_POST['socket'];
  $max_tdp=$_POST['max_tdp'];
  $price=$_POST['price'];
  $pic=$_FILES['image']['name'];

  $sql="insert into `cpu_fan_tbl`(`name`, `company`,`cooler_type`,`socket`,`max_tdp`,`price`,`sold_by`, `pic`) VALUES
                              ('$name','$company','$cooler_type','$socket',$max_tdp,$price,'$id','$name.jpg')";
// echo "$sql";
if($result1=mysqli_query($con,$sql)){
  $target_dir = "../project/cpu_fan/";
  $target_path=$target_dir.$name.".jpg";
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
