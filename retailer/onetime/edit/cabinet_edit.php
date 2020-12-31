<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='retailer') {
 header('location: ../../../login.php');
 }
if (!isset($_SESSION['cabinet_edit']))
{
  header('location:../../onetime/cabinet_one.php');
  }


 include('../../../database/database_connection.php');
 $id=$_SESSION['loginid'];
$cabinet_name=$_SESSION['cabinet_edit'];
  $sql2="select Count(*) from ordertbl where status=1 and save=0";
  // echo $sql2;
  $con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
  $result1=mysqli_query($con,$sql2)or die("number query moonchi");
  $row=mysqli_fetch_array($result1);



  $sql3="select * from cabinet_tbl where name='$cabinet_name'";
  $result_cab=mysqli_query($con,$sql3)or die("number query moonchi");
  $n=mysqli_num_rows($result_cab);
          if($n==0){
            header('location:../../onetime/cabinet_one.php');
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
    var Cabinet = document.getElementById('name').value;
          if (!Cabinet) return;
          console.log("WORKING user TILL HERE");
          var ajax = new XMLHttpRequest();
          ajax.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200 ){
              console.log(this.response); //helps SEE WHATS GOING ON in the php file;
              if(this.response=='TRUE'){
                  document.getElementById('nameid').innerHTML="Cabinet name is already entered";
                  document.getElementById('name').value="";
                  document.forms["cabinet_tbl"]["name"].focus();
              }
              else{
                  document.getElementById('nameid').innerHTML="";

              }
            }
          }
          ajax.open("GET", "checkmother.php?Cabinet="+Cabinet, true);
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
      <form action="" method="post" name="cabinet_tbl" enctype="multipart/form-data" class="form-group-sm container"  >
        <h2 style="float: center;">New Cabinet Fan </h2 >
          <hr>
          <h6>Try to use accurate data</h6>
          <h6>(Try using <strong>CAPITAL</strong> letters)</h6>
        <hr>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholder="Cabinet Name" name="name" id="name" value="<?php echo $row['name']; ?>"><br>
        <span id='nameid'></span>
        <input type="text" class="form-control" style="width:450px;" required  placeholder="Cabinet company" name="company"  value="<?php echo $row['company']; ?>"><br>
        <input type="text" class="form-control" style="width:450px;" required  placeholder="Cabinet model" name="model"  value="<?php echo $row['model']; ?>"><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="Is Cabinet Has Integrated power" name="int_power" value="<?php echo $row['int_power']; ?>"><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="Is Cabinet Have Power Supply" name="pow_sup" value="<?php echo $row['pow_sup']; ?>"><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="Cabinet Price" name="price" value="<?php echo $row['price']; ?>">
        <!-- Select image to upload: -->
        <span >Choose the image </span> <input type="file" style="width:450px;" required class="form-control" name="image" id="file" value="">
        <br>
        <input type="submit" name="submit"  class="btn btn-success" value="Submit">
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

  unset($_SESSION['$cabinet_edit']);
  $name=$_POST['name'];
  $company=$_POST['company'];
  $model=$_POST['model'];
  $int_power=$_POST['int_power'];
  $pow_sup=$_POST['pow_sup'];
  $price=$_POST['price'];
  $pic=$_FILES['image']['name'];

  $sql="update `cabinet_tbl` set `name`='$name', `company`='$company',`model`='$model',`int_power`='$int_power',`pow_sup`='$pow_sup',`price`=$price, `pic`='$pic' where `name`='$cabinet_name'";
// echo "$sql";
if($result1=mysqli_query($con,$sql)){
  $target_dir = "../../../project/Cabinet/";
  $target_path=$target_dir.$pic;
  move_uploaded_file($_FILES['image']['tmp_name'],$target_path);
  echo "<script>alert('Data Sucessfully Updated');</script>";
  // header('location:');
  echo "<script>window.location.reload();</script>";
}
else {
  echo $sql ;
  // echo "<script>alert('Data not inserted');</script>";
}
} ?>
</html>
