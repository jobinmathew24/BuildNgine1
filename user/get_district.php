<?php
include('database/database_connection.php');
$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");

if(!empty($_POST["state_id"]))
{
$query =mysqli_query($con,"SELECT * FROM district WHERE StCode = '" . $_POST["state_id"] . "'");
?>
<option value="">Select District</option>
<?php
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row["DistrictName"]; ?>"><?php echo $row["DistrictName"]; ?></option>
<?php
}
}
?>
