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
    <?php
  include('../php/retailer_header.php');
   ?>
  <center>
    <div class="container">
      <br>

      <form action="" method="post" name="cpu_fan_tbl" enctype="multipart/form-data" class="form-group-sm container"  >
        <h2 style="float: center;">New CPU Fan </h2 >
          <hr>
          <h6>Try to use accurate data</h6>
          <h6>(Try using <strong>CAPITAL</strong> letters)</h6>
        <hr>
        <p>CPU Fan Name</p>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholderr="CPU Fan Name" name="name" id="name" value=""><br>
        <span id='nameid'></span>
        <p>CPU Fan Company</p>
        <input type="text" class="form-control" style="width:450px;" required  placeholderr="CPU Fan company" name="company"  value=""><br>
        <p>CPU Fan Cooler Type</p>
        <select class="form-control" type="button" style="width:450px;" name="cooler_type" required>

                      <option value="">--</option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_cooler_type ))
                           {
                               echo "<option value='".$data_ram['cooler_type']."'>" .$data_ram['cooler_type'] ." </option>";
                           }
                            ?>

        </select><br>
        <p>CPU Fan Compatible Sockets</p>
        <input type="text" class="form-control" style="width:450px;" required  placeholderr="CPU Fan Compatible Sockets" name="socket"  value=""><br>
        <p>CPU Fan Max TDP</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="CPU Fan Max TDP" name="max_tdp" value=""><br>
        <p>CPU Fan Price</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="CPU Fan Price" name="price" value="">
        <!-- Select image to upload: --><br>
        <p>Choose the image </p>
        <input type="file" style="width:450px;" required accept="image/jpeg" class="form-control" name="image" id="file" value="">
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
}
include('../php/footer.php');
 ?>
</html>
