<?php
session_start();
if (isset($_SESSION['user']) and !isset($_SESSION['mbname'])) {
  header('location:motherboard.php');
}
if (isset($_SESSION['mbname']) and !isset($_SESSION['cpuname'])) {
  header('location:cpu.php');
}
 if (isset($_SESSION['cpuname']) and !isset($_SESSION['ramname'])) {
  header('location:ram.php');
}
if (isset($_SESSION['ramname']) and !isset($_SESSION['gpuname'])) {
  header('location:gpu.php');
}
if (isset($_SESSION['gpuname']) and !isset($_SESSION['memname'])) {
  header('location:mem.php');
}
 if (isset($_SESSION['memname']) and !isset($_SESSION['smpsname'])) {
  header('location:smps.php');
}
 if (isset($_SESSION['smpsname']) and !isset($_SESSION['cpu_fanname'])) {
  header('location:cpu_fan.php');
}
 if (isset($_SESSION['cpu_fanname']) and !isset($_SESSION['cabinetname'])) {
  header('location:cabinet.php');
}


 ?>
