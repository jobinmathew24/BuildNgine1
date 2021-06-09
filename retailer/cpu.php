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

  $sql="select distinct(`socket`) from `cpu_tbl` where verified =1 order by `socket` desc";
  $sql_socket=mysqli_query($con,$sql);

  $sql="select distinct(`core_count`) from `cpu_tbl` where verified =1 order by `core_count` desc";
  $sql_core=mysqli_query($con,$sql);

  $sql="select distinct(`purpose`) from `cpu_tbl` where verified =1 order by `purpose` desc";
  $sql_pur=mysqli_query($con,$sql);


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
    <!-- <link rel="stylesheet" href="../css/11.css"> -->
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
    var cpu_name = document.getElementById('name').value;
          if (!cpu_name) return;
          console.log("WORKING user TILL HERE");
          var ajax = new XMLHttpRequest();
          ajax.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200 ){
              console.log(this.response); //helps SEE WHATS GOING ON in the php file;
              if(this.response=='TRUE'){
                  document.getElementById('nameid').innerHTML="CPU name is already entered";
                  document.getElementById('name').value="";
                  document.forms["cpu_tbl"]["name"].focus();
              }
              else{
                  document.getElementById('nameid').innerHTML="";

              }
            }
          }
          ajax.open("GET", "checkmother.php?cpu_name="+cpu_name, true);
          ajax.send();

}

  </script>
  <?php
  include('../php/retailer_header.php');
   ?>
  <center>
    <div class="container">
      <br>

      <form action="" method="post" name="cpu_tbl" enctype="multipart/form-data" class="form-group-sm container"  >
        <h2 style="float: center;">New CPU</h2 >
          <hr>
          <h6>Try to use accurate data</h6>
          <h6>(Try using <strong>CAPITAL</strong> letters)</h6>
        <hr>
        <p>CPU Name</p>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholderr="CPU Name" name="name" id="name" value=""><br>
        <span id='nameid'></span>
        <p>CPU Company</p>
        <input type="text" class="form-control" style="width:450px;" required placeholderr="CPU Company" name="company" value=""><br>
        <p>CPU Socket</p>
        <select class="form-control" type="button" style="width:450px;" name="socket" required>

                      <option value="">--</option>
                        <?php

                           while($data_socket=mysqli_fetch_array($sql_socket))
                           {
                               echo "<option value='".$data_socket['socket']."'>" .$data_socket['socket'] ."</option>";
                           }
                            ?>

        </select><br>
        <p>CPU Core Count</p>
        <select class="form-control" type="button" style="width:450px;" name="core_count" required>

                      <option value="">--</option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_core))
                           {
                               echo "<option value='".$data_ram['core_count']."'>" .$data_ram['core_count'] ."</option>";
                           }
                            ?>

        </select><br>
        <p>CPU Thread Count</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="CPU Thread Count" name="thread" value=""><br>
        <p>CPU Frequency</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="CPU Frequency" name="frequency" value=""><br>
        <p>CPU Turboboost Freq</p>
        <input type="text" class="form-control" style="width:450px;" required placeholderr="CPU Turboboost Freq" name="turboboost" value=""><br>
        <p>CPU IGPU</p>
        <input type="text" class="form-control" style="width:450px;" required placeholderr="CPU IGPU" name="igpu" value=""><br>
        <p>CPU Lithography</p>
        <input type="text" class="form-control" style="width:450px;" required placeholderr="CPU Lithography" name="lithography" value=""><br>
        <p>CPU Cache</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="CPU Cache" name="cache" value=""><br>
        <p>CPU TDP</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="CPU TDP" name="tdp" value=""><br>
        <p>CPU Max Temp</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="CPU Max Temp" name="max_temp" value=""><br>
        <p>CPU Purpose</p>
        <select class="form-control" type="button" style="width:450px;" name="purpose" required>

                      <option value="">--</option>
                        <?php

                           while($data_pur=mysqli_fetch_array($sql_pur))
                           {
                               echo "<option value='".$data_pur['purpose']."'>" .$data_pur['purpose'] ."</option>";
                           }
                            ?>

        </select><br>
        <p>CPU Price</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="CPU price" name="price" value="">
        <!-- Select image to upload: -->
        <br>
        <p>Choose the Image </p>
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
  $core_count=$_POST['core_count'];
  $thread=$_POST['thread'];
  $frequency=$_POST['frequency'];
  $turboboost=$_POST['turboboost'];
  $igpu=$_POST['igpu'];
  $lithography=$_POST['lithography'];
  $cache=$_POST['cache'];
  $tdp=$_POST['tdp'];
  $max_temp=$_POST['max_temp'];
  $purpose=$_POST['purpose'];
  $price=$_POST['price'];
  $pic=$_FILES['image']['name'];

  $sql="insert into `cpu_tbl`(`name`, `company`, `socket`, `core_count`, `thread_count`, `frequency`, `turboboost`, `igpu`, `lithography`, `cache`, `tdp`, `max_temp`, `purpose`, `price`,`sold_by`, `pic`) VALUES
  ('$name','$company','$socket',$core_count,$thread,$frequency,'$turboboost','$igpu','$lithography',$cache,$tdp,$max_temp,'$purpose',$price,'$id','$name.jpg')";
// echo "$sql";
if($result1=mysqli_query($con,$sql)){
  $target_dir = "../project/cpu/";
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
