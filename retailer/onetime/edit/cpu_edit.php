<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='retailer') {
 header('location: ../../../login.php');
 }
 if (!isset($_SESSION['cpu_edit']))
 {
   header('location:../../onetime/cpu_one.php');
   }
 include('../../../database/connection.php');
 $id=$_SESSION['loginid'];
$cpu_name=$_SESSION['cpu_edit'];
  $sql2="select Count(*) from ordertbl where status=1 and save=0";
  // echo $sql2;

  $result1=mysqli_query($con,$sql2)or die("number query moonchi");
  $row=mysqli_fetch_array($result1);

  $sql="select distinct(`socket`) from `cpu_tbl` where verified =1 order by `socket` desc";
  $sql_socket=mysqli_query($con,$sql);

  $sql="select distinct(`core_count`) from `cpu_tbl` where verified =1 order by `core_count` desc";
  $sql_core=mysqli_query($con,$sql);

  $sql="select distinct(`purpose`) from `cpu_tbl` where verified =1 order by `purpose` desc";
  $sql_pur=mysqli_query($con,$sql);



    $sql3="select * from cpu_tbl where name='$cpu_name'";
    $result_cab=mysqli_query($con,$sql3)or die("number query moonchi");
    $n=mysqli_num_rows($result_cab);
            if($n==0){
              header('location:../../onetime/cpu_one.php');
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
     <link rel="stylesheet" href="../css/11.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "../../../css/jquery-ui.css" rel = "stylesheet">
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
  include('../../../php/retailer_edit_header.php');
   ?>
  <center>
    <div class="container">
      <br>
<?php foreach($result_cab as $row){ ?>
      <form action="" method="post" name="cpu_tbl" enctype="multipart/form-data" class="form-group-sm container"  >
        <h2 style="float: center;">New CPU</h2 >
          <hr>
          <h6>Try to use accurate data</h6>
          <h6>(Try using <strong>CAPITAL</strong> letters)</h6>
        <hr>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholder="CPU Name" name="name" id="name" value="<?php echo $row['name']; ?>"><br>
        <span id='nameid'></span>
        <input type="text" class="form-control" style="width:450px;" required placeholder="CPU Company" name="company" value="<?php echo $row['company']; ?>"><br>
        <select class="form-control" type="button" style="width:450px;" name="socket" required>

                      <option value="<?php echo $row['socket']; ?>"><?php echo $row['socket']; ?></option>
                        <?php

                           while($data_socket=mysqli_fetch_array($sql_socket))
                           {
                               echo "<option value='".$data_socket['socket']."'>" .$data_socket['socket'] ."</option>";
                           }
                            ?>

        </select><br>
        <select class="form-control" type="button" style="width:450px;" name="core_count" required>

                      <option value="<?php echo $row['core_count']; ?>"><?php echo $row['core_count']; ?></option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_core))
                           {
                               echo "<option value='".$data_ram['core_count']."'>" .$data_ram['core_count'] ."</option>";
                           }
                            ?>

        </select><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="CPU Thread Count" name="thread" value="<?php echo $row['thread_count']; ?>"><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="CPU Frequency" name="frequency" value="<?php echo $row['frequency']; ?>"><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="CPU Turboboost Freq" name="turboboost" value="<?php echo $row['turboboost']; ?>"><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="CPU IGPU" name="igpu" value="<?php echo $row['igpu']; ?>"><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="CPU Lithography" name="lithography" value="<?php echo $row['lithography']; ?>"><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="CPU Cache" name="cache" value="<?php echo $row['cache']; ?>"><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="CPU TDP" name="tdp" value="<?php echo $row['tdp']; ?>"><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="CPU Max Temp" name="max_temp" value="<?php echo $row['max_temp']; ?>"><br>
        <select class="form-control" type="button" style="width:450px;" name="purpose" required>

                      <option value="<?php echo $row['purpose']; ?>"><?php echo $row['purpose']; ?></option>
                        <?php

                           while($data_pur=mysqli_fetch_array($sql_pur))
                           {
                               echo "<option value='".$data_pur['purpose']."'>" .$data_pur['purpose'] ."</option>";
                           }
                            ?>

        </select><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="CPU price" name="price" value="<?php echo $row['price']; ?>">
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

  unset($_SESSION['$cpu_edit']);
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

  $sql="update `cpu_tbl` set `name`='$name', `company`='$company', `socket`='$socket', `core_count`=$core_count, `thread_count`=$thread, `frequency`=$frequency, `turboboost`='$turboboost',
  `igpu`='$igpu', `lithography`='$lithography', `cache`='$cache', `tdp`=$tdp, `max_temp`=$max_temp, `purpose`='$purpose', `price`=$price, `pic`='$name.jpg' where `name`='$cpu_name'";

if($result1=mysqli_query($con,$sql)){
  $target_dir = "../../../project/cpu/";
  $target_path=$target_dir.$name.".jpg";
  move_uploaded_file($_FILES['image']['tmp_name'],$target_path);
  echo "<script>alert('Data Sucessfully Updated');</script>";
// header('location:retailer.php');
  echo "<script>window.location.reload();</script>";
}
else {
  echo $sql ;
  // echo "<script>alert('Data not inserted');</script>";
}
}
include('../../../php/footer.php');?>

</html>
