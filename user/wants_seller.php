<?php
session_start();
if(!isset($_SESSION['loginid']) or !$_SESSION['user']=='user') {
  header('location: ../login.php');
}
include('../database/connection.php');

$ide=$_SESSION['loginid'];

?>
<h4>page under maintance</h4>
