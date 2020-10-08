<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="BOOT.css">

</head>
<style media="screen">
td{
  padding-left:80px;
  padding-bottom: 10px;
}
</style>
<body>
  <script type="text/javascript">

  function one(a) {

document.getElementById('resulte').value=a;
alert(a);
document.getElementById("forme").submit();

   // $sql="insert into ordertbl (loginid, name, price, qty, total) VALUES ('$qwe','$name',$price,1,$price*1)";
    // $result=mysqli_query($con,$sql)or die("query moonchi");

  }
  <?php
   $sql="select * from mothertbl";
   ?>

  </script>
  <label for="socket">Choose a Socket:</label>
  <select id="socket" name="">
    <option value="*">none</option>
    <option value='AM3'>AM3+</option>
    <option value="AM4">AM4</option>
    <option value="FM3">FM2+</option>
    <option value="LGA 1151">LGA 1151</option>
    <option value="LGA 1151 V2">LGA 1151 V2</option>
    <option value="LGA 2011-3">LGA 2011-3</option>
    <option value="LGA 2066">LGA 2066</option>
    <option value="TR4">TR4</option>
  </select>
  <label for="ram">Choose max RAM:</label>
  <select id="ram" name="">
    <option value="">none</option>
    <option value="">16 GB</option>
    <option value="">32 GB</option>
    <option value="">64 GB</option>
    <option value="">128 GB</option>
    </select>
    <label for="ChipSet">Choose ChipSet:</label>
    <select id="ram" name="">
      <option value="">none</option>
      <option value="">AMD</option>
      <option value="">INTEL</option>
      </select>
          <label for="ChipSet">Choose Purpose:</label>
      <select id="purpose" name="">
        <option value="">none</option>
        <option value="">BUSINESS</option>
        <option value="">GAMING</option>
        </select>

        <script>
          $('#socket').change(function(){
               var socket = $(this).val();
           $.ajax({
               type: "GET",
               url: "fetch.php",
               data: "socket="+socket,
               success: function( data ) {
                 document.getElementById("show1").innerHTML=" ";
                   document.getElementById("show").innerHTML = data;
               }
           });
           });
           </script>

  <form id="forme" action="" method="post">
      <input type="hidden" name="result" id="resulte">

<div id="show">

</div>
<div id="show1">

<?php
 $con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
 $sql="select * from mothertbl";
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
<?php }?>
 </div>
<?php
if (isset($_POST['submit'])) {

$name=$_POST['result'];
// echo "$name";
$sql="select price from mothertbl where name='$name'";
// echo "$sql";
$result=mysqli_query($con,$sql)or die("query moonchi");
while ($rows=mysqli_fetch_array($result)) {
  $price=$rows['price'];
}
$sql="insert into ordertbl (loginid, name, price, qty, total) VALUES ('$loginid','$name',$price,1,$price*1)";
$result=mysqli_query($con,$sql)or die("query moonchi");

}
 ?>
</form>
</body>
</html>
