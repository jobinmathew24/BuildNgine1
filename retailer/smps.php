<?php
session_start();
 if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='retailer') {
  header('location: ../login.php');
  }
  include('../database/connection.php');
  $id=$_SESSION['loginid'];

  $sql2="select Count(*) from ordertbl where status=1 and save=0 and buy =1 and remark!='Order in Transit'";
  // echo $sql2;

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
    <?php
  include('../php/retailer_header.php');
   ?>
  <center>
    <div class="container">
      <br>

      <form action="" method="post" name="smps_tbl" enctype="multipart/form-data" class="form-group-sm container"  >
        <h2 style="float: center;">New SMPS </h2 >
          <hr>
          <h6>Try to use accurate data</h6>
          <h6>(Try using <strong>CAPITAL</strong> letters)</h6>
        <hr>
        <p>SMPS Name</p>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholderr="SMPS Name" name="name" id="name" value=""><br>
        <span id='nameid'></span>
        <p>SMPS Company</p>
        <input type="text" class="form-control" style="width:450px;" required  placeholderr="SMPS company" name="company"  value=""><br>
        <p>SMPS Power</p>
        <input type="number" class="form-control" style="width:450px;" required  placeholderr="SMPS Power" name="power"  value=""><br>
        <p>SMPS CPU Power Connector</p>
        <select class="form-control" type="button" style="width:450px;" name="cpu_pow" required>

                      <option value="">--</option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_cpu_pow ))
                           {
                               echo "<option value='".$data_ram['cpu_pow']."'>" .$data_ram['cpu_pow'] ." </option>";
                           }
                            ?>

        </select><br>
        <p>SMPS Motherboard Power Connector</p>
        <input type="number" class="form-control" min="4" max="8" style="width:450px;" required  placeholderr="SMPS Motherboard Power" name="mb_pow"  value=""><br>
        <p>SMPS SATA Power Connector</p>
        <select class="form-control" type="button" style="width:450px;" name="sata_count" required>

                      <option value="">--</option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_sata_count))
                           {
                               echo "<option value='".$data_ram['sata_count']."'>" .$data_ram['sata_count'] ." Nos </option>";
                           }
                            ?>

        </select><br>
        <p>SMPS SATA PCIe Power Cable</p>
        <select class="form-control" type="button" style="width:450px;" name="pci_count" required>

                      <option value="">--</option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_pci_count))
                           {
                               echo "<option value='".$data_ram['pci_count']."'>" .$data_ram['pci_count'] ." Nos </option>";
                           }
                            ?>

        </select><br>
        <p>SMPS Price</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="SMPS price" name="price" value="">
        <!-- Select image to upload: --><br>
        <P >Choose the Image </p>
           <input type="file" style="width:450px;" accept="image/jpeg" required class="form-control" name="image" id="file" value="">
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
                              ('$name','$company',$power,'$cpu_pow','$mb_pow',$sata_count,$pci_count,$price,'$id','$name.jpg')";
// echo "$sql";
if($result1=mysqli_query($con,$sql)){
  $target_dir = "../project/smps/";
  $target_path=$target_dir.$name.".jpg";
  move_uploaded_file($_FILES['image']['tmp_name'],$target_path);
  echo "<script>alert('Data inserted Sucessfully');</script>";
header('location:retailer.php');
}
else {
  echo $sql ;
  // echo "<script>alert('Data not inserted');</script>";
}
}
include('../php/footer.php');
 ?>
</html>
