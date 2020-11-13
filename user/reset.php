<?php
session_start();
$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");



//
// cabinet: model
// processors :name turboboost
// ram_one :ram_size
// HDD:size
// SSD:sixe
// graphics mem_type mem_size

$id=$_SESSION['loginid'];
$mbname=$_SESSION['mbname'];
$cpuname=$_SESSION['cpuname'];
$ramname=$_SESSION['ramname'];
$ram_type=$_SESSION['ram_type'];
$cabinetname=$_SESSION['cabinetname'];
$memname=$_SESSION['memname'];
$gpuname=$_SESSION['gpuname'];
$smpsname=$_SESSION['smpsname'];
$cpu_fanname=$_SESSION['cpu_fanname'];
$m2_count=$_SESSION['m2_count'];
$m2_mem="null";

$cabinetsql="select model from cabinet_tbl where name='$cabinetname'";

$resultcabinet=mysqli_query($con,$cabinetsql)or die($cabinetsql);
$row=mysqli_fetch_array($resultcabinet);
$name=$row['model']." ";
// echo $cabinetsql;

$processorsql="select name,turboboost from cpu_tbl where name='$cpuname'";
$resultprocess=mysqli_query($con,$processorsql)or die($processorsql);
$row=mysqli_fetch_array($resultprocess);

$name.=$row['name']. " ";
$name.=$row['turboboost']. "  ";


$ramsql="select ram_size from ram_tbl where name='$ramname'";
$resultram=mysqli_query($con,$ramsql)or die($ramsql);
$row=mysqli_fetch_array($resultram);

$name.=$row['ram_size']. "Gb  ";

$name.=$ram_type."   RAM ";

$hddsql="select size from memory_tbl where name='$memname'";
$resulthdd=mysqli_query($con,$hddsql)or die($hddsql);
$row=mysqli_fetch_array($resulthdd);

$name.=$row['size']. "Gb  ";
$name.=" HDD ";

if($m2_count>0)
{
  $m2_mem=$_SESSION['m2_mem'];
$ssdsql="select size from memory_tbl where name='$m2_mem'";
$resultssd=mysqli_query($con,$ssdsql)or die($ssdsql);
$row=mysqli_fetch_array($resultssd);
$name.=$row['size']. "Gb  ";
$name.=" SSD ";
}

$vramsql="select mem_type,mem_size from gpu_tbl where name='$gpuname'";
$resultvram=mysqli_query($con,$vramsql)or die($vramsql);
$row=mysqli_fetch_array($resultvram);

$name.=" Graphics ".$row['mem_type']." ";
$name.=$row['mem_size'];
// echo "$name";
$pricesql ="select sum(price) as total from ordertbl where loginid='$id' and bulid=1";
$resultprice=mysqli_query($con,$pricesql)or die($pricesql);
$row=mysqli_fetch_array($resultprice);
$price=$row['total'];

$sql="insert into `prebuilt_tbl`( `loginid`, `name`, `motherboard`, `cpu`, `ram`, `gpu`, `mem`, `mem_m2`, `smps`, `cpu_fan`, `cabinet`,price)
                          VALUES('$id','$name','$mbname','$cpuname','$ramname','$gpuname','$memname','$m2_mem','$smpsname','$cpu_fanname','$cabinetname',$price)";

if(mysqli_query($con,$sql)or die($sql)){
  $delete="delete from ordertbl where bulid=1";
  mysqli_query($con,$delete)or die($delete);

  $id=$_SESSION['loginid'];
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
  $_SESSION['user']=$id;
  header('location: users.php');

}
// echo $sql;
//


 ?>
