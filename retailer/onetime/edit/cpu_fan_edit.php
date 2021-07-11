<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='retailer') {
 header('location: ../../../login.php');
 }
 if (!isset($_SESSION['cpu_fan_edit']))
 {
   header('location:../../onetime/cpu_fan_one.php');
   }

 include('../../../database/connection.php');
 $id=$_SESSION['loginid'];
$cpu_fan_name=$_SESSION['cpu_fan_edit'];
  $sql2="select Count(*) from ordertbl where status=1 and save=0";
  // echo $sql2;

  $result1=mysqli_query($con,$sql2)or die("number query moonchi");
  $row=mysqli_fetch_array($result1);


  $sql="select distinct(`cooler_type`) from `cpu_fan_tbl` where verified =1 order by `cooler_type` desc";
  $sql_cooler_type=mysqli_query($con,$sql);


  $sql3="select * from cpu_fan_tbl where name='$cpu_fan_name'";
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
     <link rel="stylesheet" href="../css/11.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href = "../../../css/jquery-ui.css" rel = "stylesheet">
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
  include('../../../php/retailer_edit_header.php');
   ?>
  <center>
    <div class="container">
      <br>
<?php foreach($result_cab as $row){ ?>
      <form action="" method="post" name="cpu_fan_tbl" enctype="multipart/form-data" class="form-group-sm container"  >
        <h2 style="float: center;">New CPU Fan </h2 >
          <hr>
          <h6>Try to use accurate data</h6>
          <h6>(Try using <strong>CAPITAL</strong> letters)</h6>
        <hr>
        <p>CPU Fan Name</p>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholder="CPU Fan Name" name="name" id="name" value="<?php echo $row['name']; ?>"><br>
        <span id='nameid'></span>
        <p>CPU Fan Company</p>
        <input type="text" class="form-control" style="width:450px;" required  placeholder="CPU Fan company" name="company"  value="<?php echo $row['company']; ?>"><br>
        <p>CPU Fan Cooler Type</p>
        <select class="form-control" type="button" style="width:450px;" name="cooler_type" required>

                      <option value="<?php echo $row['cooler_type']; ?>"><?php echo $row['cooler_type']; ?></option>
                        <?php

                           while($data_ram=mysqli_fetch_array($sql_cooler_type ))
                           {
                               echo "<option value='".$data_ram['cooler_type']."'>" .$data_ram['cooler_type'] ." </option>";
                           }
                            ?>

        </select><br>
        <p>CPU Fan Compatible Sockets</p>
        <input type="text" class="form-control" style="width:450px;" required  placeholder="CPU Fan Compatible Sockets" name="socket"  value="<?php echo $row['socket']; ?>"><br>
        <p>CPU Fan Max TDP</p>
        <input type="number" class="form-control" style="width:450px;" required placeholder="CPU Fan Max TDP" name="max_tdp" value="<?php echo $row['max_tdp']; ?>"><br>
        <p>CPU Fan Price</p>
        <input type="number" class="form-control" style="width:450px;" required placeholder="CPU Fan Price" name="price" value="<?php echo $row['price']; ?>">
        <!-- Select image to upload: -->
        <br>
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
}
if(isset($_POST['submit'])){

  unset($_SESSION['$cpu_fan_edit']);
  $name=$_POST['name'];
  $company=$_POST['company'];
  $cooler_type=$_POST['cooler_type'];
  $socket=$_POST['socket'];
  $max_tdp=$_POST['max_tdp'];
  $price=$_POST['price'];
  $pic=$_FILES['image']['name'];

  $sql="update `cpu_fan_tbl` set `name`='$name', `company`='$company',`cooler_type`='$cooler_type',
  `socket`='$socket',`max_tdp`=$max_tdp,`price`=$price, `pic`='$name.jpg' where `name`='$cpu_fan_name'";

// echo "$sql";
if($result1=mysqli_query($con,$sql)){
  $target_dir = "../../../project/cpu_fan/";
  $target_path=$target_dir.$name.".jpg";
  move_uploaded_file($_FILES['image']['tmp_name'],$target_path);
  echo "<script>alert('Data Sucessfully Updated');</script>";
  echo "<script>window.location.reload();</script>";

}
else {
  echo $sql ;
  // echo "<script>alert('Data not inserted');</script>";
}
} include('../../../php/footer.php');
?>
</html>
