<?php
$Socket=$_GET['socket'];
include('../database/connection.php'); 
 $sql="select * from mothertbl where socket='$Socket'";
 echo "$sql";
$loginid="qwe";
$result=mysqli_query($con,$sql)or die("query moonchi");
 $i=1;
// $n=mysqli_num_rows($result);
while ($rows=mysqli_fetch_array($result)) {

  $name=$rows['name'];
  $socket=$rows['socket'];
  $formfactor=$rows['form_factor'];
  $ramtype=$rows['ram_type'];
  $maxram=$rows['max_ram'];
  $pciecount=$rows['pcie_count'];
  $mbpow=$rows['mb_pow'];
  $cpupow=$rows['cpu_pow'];
  $chipset=$rows['chipset'];
  $ramcount=$rows['ram_count'];
  $satacount=$rows['sata_count'];
  $m2count=$rows['m2_count'];
  $maxfre=$rows['max_freq'];
  $purpose=$rows['purpose'];
  $price=$rows['price'];
  $pic=$rows['pic'];

 // echo "$name";
 $d="flip".$i;
 $e="panel".$i;
 $i=$i+1;;
 // echo $d;
 ?>
 <script>
 $(document).ready(function(){
   $("#<?php echo $d ?>").click(function(){
     $("#<?php echo $e ?>").slideToggle("medium");
   });
 });
 </script>
 <style>

 #<?php echo $d ?>, #<?php echo $e ?> {
   padding: 8px;
   padding-left: 50px;
   /* text-align: center; */
   background-color: #e5eecc;
   border: solid 1px #c3c3c3;
 }

 #<?php echo $e ?> {
   padding: 50px;
   display: none;
 }
 </style>

 <div id="<?php echo "$d"; ?>"><?php echo "$name"; ?></div>
 <div id="<?php echo "$e"; ?>">
<img src="project\mother\<?php echo "$pic" ?>" width="100px" height="100px"alt="<?php echo $name ?>"><br>
<table >
  <tr>
    <td>&nbsp; Name: <?php echo $name ?> </td>
    <td>&nbsp; Socket :<?php echo $socket  ?></td>
    <td>&nbsp; ChipSet :<?php echo $chipset  ?></td>
  </tr>
  <tr>
    <td>&nbsp; Form Factor :<?php echo $formfactor  ?> </td>
    <td>&nbsp; RAM Type :<?php echo $ramtype  ?></td>
    <td>&nbsp; RAM Count :<?php echo $ramcount  ?></td>
  </tr>
  <tr>
    <td>&nbsp; Max RAM :<?php echo $maxram  ?> Gb </td>
    <td>&nbsp; PCIe Count :<?php echo $pciecount  ?></td>
    <td>&nbsp; SATA Count :<?php echo $satacount  ?></td>
  </tr>
  <tr>
    <td>&nbsp; Motherboard Pow:<?php echo $mbpow  ?> Gb </td>
    <td>&nbsp; CPU Pow :<?php echo $cpupow ?></td>
    <td>&nbsp; M.2 Count :<?php echo $m2count ?></td>
  </tr>
  <tr>
    <td>&nbsp; Max. frequency:<?php echo $maxfre ?> Gb </td>
    <td>&nbsp; Purpose :<?php echo $purpose ?></td>
    <td>&nbsp; Price :<?php echo "₹ ". $price ?></td>
  </tr>
</table>

  <br>

  <input type="submit" name="submit" onclick="one('<?php echo $name ?>')"  class="btn btn-success" value="buynow">
 </div>
 <?php
 }
 ?>
