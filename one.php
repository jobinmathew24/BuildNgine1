<?php
session_start();
$con=mysqli_connect("localhost","root","","vegdb") or die("couldn't connect");

	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="../css/style.css">


</head>
<body>




 	<?php
	$con=mysqli_connect("localhost","root","","vegdb") or die("COULDN'T CONNECT");
	$query = " select * from tbl_addleafyveg ";
	$results = mysqli_query($con,$query);

	while($row=mysqli_fetch_array($results))
{?>

		<div>
		<center>


			<a href="order.html">
			<img  style=" padding:5px;"src="../admin/upload/<?php echo $row['image'] ?>" width="150px" height="150px" ></a>
			<h3 ><strong><?php echo $row['Leafname'] ?></strong></h3>
			<h5  style="color:red;" class="text-danger" ><strong>₹<strong> <?php echo $row['price'] ?>per/kg</h5>
			<input type="submit"   value="ADD TO CART" class="btn btn-primary py-3 px-5">
        </center>



	</div>


	<?php
}?>


							 <script>
function myFunction() {
  alert("Item has been ordered");
}

</script>
                          </table>
					</div>
			</div>
		</div>
	</div>





</body>
</html>
