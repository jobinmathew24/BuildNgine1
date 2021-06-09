<?php
session_start();
 if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='retailer') {
  header('location: ../login.php');
  }
  include('../database/connection.php');
  $id=$_SESSION['loginid'];

  $sql2="select Count(*) from ordertbl where status=1 and save=0 and buy =1 and remark!='Order in Transit'";
  // echo $sql2;
  // $con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
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
     <link rel="stylesheet" href="../css/11.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "../css/jquery-ui.css" rel = "stylesheet">
    <style media="screen">
    .container {
  width: 450px;
}
p{
  text-align: left;
  font-size: 15px;
}
    </style>
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
  <?php
  include('../php/retailer_header.php');
   ?>
  <center>
    <div class="container">
      <br>

      <form action="" method="post" name="mothertbl" enctype="multipart/form-data" class="form-group-sm container"  >
        <h2 style="float: center;">New Motherboard</h2 >
          <hr>
          <h6>Try to use accurate data</h6>
          <h6>(Try using <strong>CAPITAL</strong> letters)</h6>
        <hr>
        <p> Motherboard Name</p>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholderr="Motherboard Name" name="name" id="name" value=""><br>
        <span id='nameid'></span><br>
        <p>Motherboard Company</p>
        <input type="text" class="form-control" style="width:450px;" required placeholderr="Motherboard Company" name="company" value=""><br>
        <p>Motherboard socket</p>
        <select class="form-control" type="button" style="width:450px;" name="socket" required>

                      <option value="">--</option>
                        <?php

                           while($data_socket=mysqli_fetch_array($sql_socket))
                           {
                               echo "<option value='".$data_socket['socket']."'>" .$data_socket['socket'] ."</option>";
                           }
                            ?>

        </select><br>
        <p>Motherboard Form Factor</p>
        <input type="text" class="form-control" style="width:450px;" required placeholderr="Motherboard Form Factor" name="factor" value=""><br>
        <p>Motherboard RAM Type</p>
        <select class="form-control" type="button" style="width:450px;" name="ram_type" required>

                      <option value="">--</option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_ram))
                           {
                               echo "<option value='".$data_ram['ram_type']."'>" .$data_ram['ram_type'] ."</option>";
                           }
                            ?>

        </select><br>
        <p>Motherboard Max RAM in Gb</p>
        <select class="form-control" type="button" style="width:450px;" name="max_ram" required>

                      <option value="">--</option>
                        <?php

                           while($data_max=mysqli_fetch_array($sql_max))
                           {
                               echo "<option value='".$data_max['max_ram']."'>" .$data_max['max_ram'] ." Gb</option>";
                           }
                            ?>

        </select><br>
        <p>Motherboard PCIe Count</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="Motherboard PCIe Count" name="pcie" value=""><br>
        <p>Motherboard Power Pin</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="Motherboard Power Pin" name="mb_pow" value=""><br>
        <p>Motherboard CPU Power Pin</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="Motherboard CPU Power Pin" name="cpu_pow" value=""><br>
        <p>Motherboard Chipset</p>
        <input type="text" class="form-control" style="width:450px;" required placeholderr="Motherboard Chipset" name="chipset" value=""><br>
        <p>Motherboard RAM Slot Count</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="Motherboard RAM Slot Count" name="ram_count" value=""><br>
        <p>Motherboard SATA Slot Count</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="Motherboard SATA Slot Count" name="sata_count" value=""><br>
        <p>Motherboard M.2 Slot Count</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="Motherboard M.2 Slot Count" name="m2_count" value=""><br>
        <p>Motherboard Max Freq</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="Motherboard Max Freq" name="max_freq" value=""><br>
        <p>Motherboard Purpose</p>
        <select class="form-control" type="button" style="width:450px;" name="purpose" required>

                      <option value="">--</option>
                        <?php

                           while($data_pur=mysqli_fetch_array($sql_pur))
                           {
                               echo "<option value='".$data_pur['purpose']."'>" .$data_pur['purpose'] ."</option>";
                           }
                            ?>

        </select><br>
        <p>Motherboard Price</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="Motherboard price" name="price" value="">
        <!-- Select image to upload: --><br>
        <p>Choose the image </p>
        <input type="file" accept="image/jpeg" style="width:450px;" required class="form-control" name="image" id="file" value="">
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

  $sql="insert into `mothertbl`(`name`, `company`, `socket`, `form_factor`, `ram_type`, `max_ram`, `pcie_count`, `mb_pow`, `cpu_pow`, `chipset`, `ram_count`, `sata_count`, `m2_count`, `max_freq`, `purpose`, `price`,`sold_by`, `pic`) VALUES
  ('$name','$company','$socket','$factor','$ram_type',$max_ram,$pcie,$mb_pow,$cpu_pow,'$chipset',$ram_count,$sata_count,$m2_count,$max_freq,'$purpose',$price,'$id','$name.jpg')";
// echo "$sql";
if($result1=mysqli_query($con,$sql)){
  $target_dir = "../project/mother/";
  $target_path=$target_dir.$name.".jpg";
  move_uploaded_file($_FILES['image']['tmp_name'],$target_path);
  echo "<script>alert('Data inserted Sucessfully');</script>";
header('location:retailer.php');
}
else {
  echo "<script>alert('Data not inserted');</script>";
}
}
include('../php/footer.php');
 ?>
</html>
