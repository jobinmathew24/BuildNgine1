<?php
session_start();
 if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='retailer') {
  header('location: ../login.php');
  }
include('../database/connection.php');
  $id=$_SESSION['loginid'];

  $sql2="select Count(*) from ordertbl where status=1 and save=0 and buy =1 and remark!='Order in Transit' ";
  // echo $sql2;

  $result1=mysqli_query($con,$sql2)or die("number query moonchi");
  $row=mysqli_fetch_array($result1);






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
<?php
include('../php/retailer_header.php');
 ?>
  <center>
    <div class="container">
      <br>

      <form action="" method="post" name="cabinet_tbl" enctype="multipart/form-data" class="form-group-sm container"  >
        <h2 style="float: center;">New Cabinet </h2 >
          <hr>
          <h6>Try to use accurate data</h6>
          <h6>(Try using <strong>CAPITAL</strong> letters)</h6>
        <hr>
        <p>Cabinet Name</p>
        <input type="text" class="form-control" style="width:450px;" required onchange="check()" placeholderr="Cabinet Name" name="name" id="name" value=""><br>
        <span id='nameid'></span>
        <p>Cabinet Company</p>
        <input type="text" class="form-control" style="width:450px;" required  placeholderr="Cabinet company" name="company"  value=""><br>
        <p>Cabinet Model</p>
        <input type="text" class="form-control" style="width:450px;" required  placeholderr="Cabinet model" name="model"  value=""><br>
        <p>Is Cabinet Has Integrated power Yes/No</p>
        <input type="text" class="form-control" style="width:450px;" required placeholderr="Is Cabinet Has Integrated power" name="int_power" value=""><br>
        <p>Is Cabinet Have Power Supply Yes/No</p>
        <input type="text" class="form-control" style="width:450px;" required placeholderr="Is Cabinet Have Power Supply" name="pow_sup" value=""><br>
        <p>Cabinet Price</p>
        <input type="number" class="form-control" style="width:450px;" required placeholderr="Cabinet Price" name="price" value="">
        <!-- Select image to upload: --><br>
        <p>Choose the image </p>
        <input type="file" style="width:450px;" required class="form-control" accept="image/jpeg" name="image" id="file" value="">
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
  $model=$_POST['model'];
  $int_power=$_POST['int_power'];
  $pow_sup=$_POST['pow_sup'];
  $price=$_POST['price'];
  $pic=$_FILES['image']['name'];

  $sql="insert into `cabinet_tbl`(`name`,`company`,`model`,`int_power`,`pow_sup`,`price`,`sold_by`, `pic`) VALUES
                              ('$name','$company','$model','$int_power','$pow_sup',$price,'$id','$name.jpg')";
// echo "$sql";
if($result1=mysqli_query($con,$sql)){
  $target_dir = "../project/Cabinet/";
  $target_path=$target_dir.$name.".jpg";
  move_uploaded_file($_FILES['image']['tmp_name'],$target_path);
  echo "<script>alert('Data inserted Sucessfully');</script>";
// header('location:retailer.php');
}
else {
  echo $sql ;
  // echo "<script>alert('Data not inserted');</script>";
}
}
include('../php/footer.php');
?>

</html>
