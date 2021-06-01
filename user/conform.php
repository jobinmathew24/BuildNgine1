<?php
session_start();
$ide=$_SESSION['loginid'];
$sql2="select Count(*) from ordertbl where loginid='$ide' and status=1";
// echo $sql2;
$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
$result1=mysqli_query($con,$sql2)or die("number query moonchi");
$row=mysqli_fetch_array($result1);
$cart=$row['Count(*)'];


$mother=$_SESSION['mbname'];
$cpu=$_SESSION['cpuname'];
$ram=$_SESSION['ramname'];
$gpu=$_SESSION['gpuname'];
$hdd=$_SESSION['memname'];
$m2=$_SESSION['m2_mem'];
$smps=$_SESSION['smpsname'];
$fan=$_SESSION['cpu_fanname'];
$cabin=$_SESSION['cabinetname'];


$sql2="select sum(price) as total from ordertbl where loginid='$ide' and status=1 and save=0 and bulid=1";
$result2=mysqli_query($con,$sql2)or die("price query moonchi");
$row=mysqli_fetch_array($result2);
$summary=$row['total'];


if (isset($_POST['conform'])) {
  header('location:reset.php');
}

if (isset($_POST['change'])) {
  $sql3="delete from ordertbl where loginid='$ide'and name='$cabin' and bulid = 1 and status=1 and save=0 ";
  $result2=mysqli_query($con,$sql3)or die("number query moonchi");
  unset($_SESSION['cabinetname']);
  header('location:check/checking_cabinet.php');
}

if (isset($_POST['delete'])) {
  $sql3="delete from ordertbl where loginid='$ide'and  bulid = 1 and status=1 and save=0 ";
  $result2=mysqli_query($con,$sql3)or die("number query moonchi");
  unset($_SESSION['socket']);
  unset($_SESSION['cpu_pow']);
  unset($_SESSION['ram_type']);
  unset($_SESSION['max_pow']);
  unset($_SESSION['m2_count']);
  unset($_SESSION['cpuname']);
  unset($_SESSION['mbname']);
  unset($_SESSION['ramname']);
  unset($_SESSION['gpuname']);
  unset($_SESSION['memname']);
  unset($_SESSION['smpsname']);
  unset($_SESSION['cpu_fanname']);
  unset($_SESSION['cabinetname']);
  header('location:users.php');
}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>conform</title>

     <script src="../js/jquery-1.10.2.min.js"></script>
     <script src="../js/jquery-ui.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/top.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href = "../css/jquery-ui.css" rel = "stylesheet">
     <!-- Custom CSS -->
<style media="screen">
.container{
  align-content: center;
}
</style>
 </head>

 <body>
   <?php
   include('../php/pdts_header.php');
    ?>
     <div class="container">
     <center>
       <div class="col-md-12">

          <div class="col-sm-12 col-lg-12 col-md-12">
           <br>
           <div style="border:1px solid #ccc; border-radius:5px; padding:16px; width:auto; margin-bottom:16px; height:auto;">
             <table>
               <tr>
                 <th style="text-align:center;" colspan="3" > <h4> <strong>Configuration Summary</strong> </h4></th>
               </tr>
               <tr>
                 <td> <h5> <strong>Motherboard</strong> </h5></td>

                 <td > <h5> <strong><?php echo $mother; ?></strong> </h5></td>


               </tr>
               <tr>
                 <td> <h5> <strong>CPU</strong> </h5></td>

                 <td > <h5> <strong><?php echo $cpu; ?></strong> </h5></td>

             </tr>
             <tr>
               <td> <h5> <strong>RAM</strong> </h5></td>

               <td > <h5> <strong><?php echo $ram; ?></strong> </h5></td>

              </tr>
             <tr>
             <td> <h5> <strong>GPU</strong> </h5></td>

             <td > <h5> <strong><?php echo $gpu; ?></strong> </h5></td>

           </tr>
         <tr>
           <td> <h5> <strong>HDD/SSD</strong> </h5></td>

           <td > <h5> <strong><?php echo $hdd; ?></strong> </h5></td>

         </tr>
              <tr>
         <td> <h5> <strong>M.2 Memory</strong> </h5></td>

         <td > <h5> <strong><?php echo $m2; ?></strong> </h5></td>

            </tr>
            <tr>
              <td> <h5> <strong>SMPS</strong> </h5></td>

              <td > <h5> <strong><?php echo $smps; ?></strong> </h5></td>
            </tr>
            <tr>
              <td> <h5> <strong>CPU Fan</strong> </h5></td>

              <td > <h5> <strong><?php echo $fan; ?></strong> </h5></td>
            </tr>
            <tr>
              <td> <h5> <strong>Cabinet</strong> </h5></td>

              <td > <h5> <strong><?php echo $cabin; ?></strong> </h5></td>
            </tr>
           <tr>
           <td> &nbsp;</td>
           </tr>
               <tr>
               <td > <h5> <strong>Total : ₹ <?php echo $summary; ?></strong> </h5></td>
               </tr>
             </table>
             <br>

               </div>
         </div>
         </div>
<form class="" action="" method="post">
  <input type="checkbox" name="" required value="">
  &nbsp;
  I understand it will take some time and it will be delivered
  to my given address,
  <br>And I understand when I click <strong>I change my mind</strong> <thead>
    the Configuration will be <strong>deleted</strong>.
  </thead>
  <br>
  <hr style="width:80%">
  <input type="submit" name="conform" class="btn btn-success" value="Conform">
  <input type="submit" name="change" class="btn btn-warning" value="Change config">
  <input type="submit" name="delete" class="btn btn-danger" value="I change my mind">
    <hr style="width:80%">
</form>
     </center>
   </div>
   <?php
   include('../php/footer.php');
    ?>

   </body>
 </html>
