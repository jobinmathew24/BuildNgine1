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


  $sql="select distinct(`size`) from `memory_tbl` where verified =1 order by `size` desc";
  $sql_size=mysqli_query($con,$sql);

  $sql="select distinct(`form_factor`) from `memory_tbl` where verified =1 and type='HDD' order by `form_factor` desc";
  $sql_form_factor=mysqli_query($con,$sql);





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
  </head>
  <style media="screen">
  .container {
width: 450px;
}
p{
text-align: left;
font-size: 15px;
}
  </style>
  <script type="text/javascript">
  function check() {
    var mem_type = document.getElementById('name').value;
          if (!mem_type) return;
          console.log("WORKING user TILL HERE");
          var ajax = new XMLHttpRequest();
          ajax.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200 ){
              console.log(this.response); //helps SEE WHATS GOING ON in the php file;
              if(this.response=='TRUE'){
                  document.getElementById('nameid').innerHTML="HDD name is already entered";
                  document.getElementById('name').value="";
                  document.forms["memory_tbl"]["name"].focus();
              }
              else{
                  document.getElementById('nameid').innerHTML="";

              }
            }
          }
          ajax.open("GET", "checkmother.php?mem_type="+mem_type, true);
          ajax.send();

}

  </script>
  <?php
  include('../php/retailer_header.php');
   ?>
  <center>
    <div class="container">
      <br>

      <form action="" method="post" name="memory_tbl" enctype="multipart/form-data" class="form-group-sm container"  >
        <h2 style="float: center;">New HDD Memory</h2 >
          <hr>
          <h6>Try to use accurate data</h6>
          <h6>(Try using <strong>CAPITAL</strong> letters)</h6>
        <hr>
        <p>HDD Name</p>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholderr="HDD Name" name="name" id="name" value=""><br>
        <span id='nameid'></span>
        <p>HDD Company</p>
        <input type="text" class="form-control" style="width:450px;" required  placeholderr="HDD company" name="company"  value=""><br>
        <p>HDD Size</p>
        <select class="form-control" type="button" style="width:450px;" name="size" required>

                      <option value="">--</option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_size ))
                           {
                               echo "<option value='".$data_ram['size']."'>" .$data_ram['size'] ." Gb</option>";
                           }
                            ?>

        </select><br>
        <p>HDD Form Factor</p>
        <select class="form-control" type="button" style="width:450px;" name="form_factor" required>

                      <option value="">--</option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_form_factor))
                           {
                               echo "<option value='".$data_ram['form_factor']."'>" .$data_ram['form_factor'] ." </option>";
                           }
                            ?>

        </select><br>
        <p>HDD RPM</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="HDD RPM" name="rpm" value=""><br>
        <p>HDD Price</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="HDD price" name="price" value="">
        <!-- Select image to upload: --><br>
        <p >Choose the image </p>
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
  $size=$_POST['size'];
  $form_factor=$_POST['form_factor'];
  $rpm=$_POST['rpm'];
  $price=$_POST['price'];
  $pic=$_FILES['image']['name'];

  $sql="insert into `memory_tbl`(`name`, `company`, `size`, `form_factor`,`type`,`ssd_type`, `rpm`, `price`,`sold_by`, `pic`) VALUES
   ('$name','$company',$size,'$form_factor','HDD','nil',$rpm,$price,'$id','$name.jpg')";
// echo "$sql";
if($result1=mysqli_query($con,$sql)){
  $target_dir = "../project/mem/";
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
