<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='retailer') {
 header('location: ../../../login.php');
 }
 if (!isset($_SESSION['gpu_edit']))
 {
   header('location:../../onetime/gpu_one.php');
   }
 include('../../../database/connection.php');
 $id=$_SESSION['loginid'];
$gpu_name=$_SESSION['gpu_edit'];
  $sql2="select Count(*) from ordertbl where status=1 and save=0";
  // echo $sql2;

  $result1=mysqli_query($con,$sql2)or die("number query moonchi");
  $row=mysqli_fetch_array($result1);

  $sql="select distinct(`company`) from `gpu_tbl` where verified =1 order by `company` desc";
  $sql_company=mysqli_query($con,$sql);

  $sql="select distinct(`processor`) from `gpu_tbl` where verified =1 order by `processor` desc";
  $sql_processor=mysqli_query($con,$sql);

  $sql="select distinct(`mem_size`) from `gpu_tbl` where verified =1 order by `mem_size` desc";
  $sql_mem_size=mysqli_query($con,$sql);

  $sql="select distinct(`mem_type`) from `gpu_tbl` where verified =1 order by `mem_type` desc";
  $sql_mem_type=mysqli_query($con,$sql);

  $sql="select distinct(`purpose`) from `gpu_tbl` where verified =1 order by `purpose` desc";
  $sql_pur=mysqli_query($con,$sql);


  $sql3="select * from gpu_tbl where name='$gpu_name'";
  $result_cab=mysqli_query($con,$sql3)or die("number query moonchi");
  $n=mysqli_num_rows($result_cab);
          if($n==0){
            header('location:../../onetime/gpu_one.php');
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
    var gpu_name = document.getElementById('name').value;
          if (!gpu_name) return;
          console.log("WORKING user TILL HERE");
          var ajax = new XMLHttpRequest();
          ajax.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200 ){
              console.log(this.response); //helps SEE WHATS GOING ON in the php file;
              if(this.response=='TRUE'){
                  document.getElementById('nameid').innerHTML="GPU name is already entered";
                  document.getElementById('name').value="";
                  document.forms["gpu_tbl"]["name"].focus();
              }
              else{
                  document.getElementById('nameid').innerHTML="";

              }
            }
          }
          ajax.open("GET", "checkmother.php?gpu_name="+gpu_name, true);
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
      <form action="" method="post" name="gpu_tbl" enctype="multipart/form-data" class="form-group-sm container"  >
        <h2 style="float: center;">New GPU</h2 >
          <hr>
          <h6>Try to use accurate data</h6>
          <h6>(Try using <strong>CAPITAL</strong> letters)</h6>
        <hr>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholder="GPU Name" name="name" id="name" value="<?php echo $row['name']; ?>"><br>
        <span id='nameid'></span>
                <select class="form-control" type="button" style="width:450px;" name="company"  required>

                      <option value="<?php echo $row['company']; ?>"><?php echo $row['company']; ?></option>
                        <?php

                           while($data_socket=mysqli_fetch_array($sql_company))
                           {
                               echo "<option value='".$data_socket['company']."'>" .$data_socket['company'] ."</option>";
                           }
                            ?>

        </select><br>
        <select class="form-control" type="button" style="width:450px;" name="processor" required>

                      <option value="<?php echo $row['processor']; ?>"><?php echo $row['processor']; ?></option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_processor ))
                           {
                               echo "<option value='".$data_ram['processor']."'>" .$data_ram['processor'] ."</option>";
                           }
                            ?>

        </select><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="GPU Core Freq" name="core_freq" value="<?php echo $row['core_freq']; ?>"><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="GPU Memory Frequency" name="mem_freq" value="<?php echo $row['mem_freq']; ?>"><br>
        <select class="form-control" type="button" style="width:450px;" name="mem_type" required>

                      <option value="<?php echo $row['mem_type']; ?>"><?php echo $row['mem_type']; ?></option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_mem_type))
                           {
                               echo "<option value='".$data_ram['mem_type']."'>" .$data_ram['mem_type'] ."</option>";
                           }
                            ?>

        </select><br>
        <select class="form-control" type="button" style="width:450px;" name="mem_size" required>

                      <option value="<?php echo $row['mem_size']; ?>"><?php echo $row['mem_size']; ?></option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_mem_size))
                           {
                               echo "<option value='".$data_ram['mem_size']."'>" .$data_ram['mem_size'] ."</option>";
                           }
                            ?>

        </select><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="GPU Memory Width" name="mem_width" value="<?php echo $row['mem_width']; ?>"><br>
        <input type="text" class="form-control" style="width:450px;" required placeholder="GPU Power Connector" name="pow_con" value="<?php echo $row['pow_con']; ?>"><br>
        <select class="form-control" type="button" style="width:450px;" name="purpose" required>

                      <option value="<?php echo $row['purpose']; ?>"><?php echo $row['purpose']; ?></option>
                        <?php

                           while($data_pur=mysqli_fetch_array($sql_pur))
                           {
                               echo "<option value='".$data_pur['purpose']."'>" .$data_pur['purpose'] ."</option>";
                           }
                            ?>

        </select><br>
        <input type="number" class="form-control" style="width:450px;" required placeholder="GPU price" name="price" value="<?php echo $row['price']; ?>">
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

  unset($_SESSION['gpu_edit']);
  $name=$_POST['name'];
  $company=$_POST['company'];
  $processor=$_POST['processor'];
  $core_freq=$_POST['core_freq'];
  $mem_freq=$_POST['mem_freq'];
  $mem_type=$_POST['mem_type'];
  $mem_size=$_POST['mem_size'];
  $mem_width=$_POST['mem_width'];
  $pow_con=$_POST['pow_con'];
  $purpose=$_POST['purpose'];
  $price=$_POST['price'];
  $pic=$_FILES['image']['name'];

  $sql="update `gpu_tbl` set `name`='$name', `company`='$company', `processor`='$processor', `core_freq`='$core_freq', `mem_freq`='$mem_freq', `mem_type`='$mem_type',
   `mem_size`='$mem_size', `mem_width`='$mem_width', `pow_con`='$pow_con', `purpose`='$purpose', `price`=$price, `image`='$name.jpg' where `name`='$gpu_name'";

// echo "$sql";
if($result1=mysqli_query($con,$sql)){
  $target_dir = "../../../project/gpu/";
  $target_path=$target_dir.$name.".jpg";
  move_uploaded_file($_FILES['image']['tmp_name'],$target_path);
  echo "<script>alert('Data Sucessfully Updated');</script>";
  echo "<script>window.location.reload();</script>";
}
else {
  echo $sql ;
  // echo "<script>alert('Data not inserted');</script>";
}
}
include('../php/footer.php');
?>
</html>
