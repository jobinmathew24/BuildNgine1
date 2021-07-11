<?php
if (!isset($_GET['name'])) {
  header('location:user.php');
}
include('../database/connection.php');
session_start();
$name=$_GET['name'];
if($name=='motherboard'){
  header('location:onetime/motherboard_one.php');
}
elseif($name=='cpu'){
  header('location:onetime/cpu_one.php');
}
elseif($name=='ram'){
  header('location:onetime/ram_one.php');
}
elseif($name=='memory'){
  header('location:onetime/mem_one.php');
}
elseif($name=='m2 memory'){
  header('location:onetime/mem_m2_one.php');
}
elseif($name=='cabinet'){
  header('location:onetime/cabinet_one.php');
}
elseif($name=='gpu'){
  header('location:onetime/gpu_one.php');
}
elseif($name=='cpu fan'){
  header('location:onetime/cpu_fan_one.php');
}
elseif($name=='smps'){
  header('location:onetime/smps_one.php');
}
else{
$_SESSION['name']=$name;
$sql="select name from prebuilt_tbl where name ='$name'";
// echo $sql;
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
    header('location:prebulit.php');
}

$sql="select name from cabinet_tbl where name ='$name'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
    header('location:onetime/cabinet_one.php');
}
$sql="select name from ram_tbl where name ='$name'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
    header('location:onetime/ram_one.php');
}
$sql="select name from gpu_tbl where name ='$name'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
    header('location:onetime/gpu_one.php');
}
$sql="select name from memory_tbl where name ='$name'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
    header('location:onetime/mem_one.php');
}
$sql="select name from cpu_fan_tbl where name ='$name'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
    header('location:onetime/cpu_fan_one.php');
}
$sql="select name from mothertbl where name ='$name'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
    header('location:onetime/motherboard_one.php');
}
$sql="select name from ram_tbl where name ='$name'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
    header('location:onetime/ram_one.php');
}
$sql="select name from smps_tbl where name ='$name'";
echo $sql;
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
    header('location:onetime/smps_one.php');
}
$sql="select name from cpu_tbl where name ='$name'";
echo $sql;
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
    header('location:onetime/cpu_one.php');
}
}
 ?>
