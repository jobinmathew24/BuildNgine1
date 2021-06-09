<?php
session_start();
//fetch_data.php

include('../database/connection.php');

if(isset($_POST["action"]))
{
$socket=$_SESSION['socket'];
	$query = "
		SELECT * FROM cpu_fan_tbl where verified=1 and status=1 and socket like '%$socket%'
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["company"]))
	{
		$company_filter = implode("','", $_POST["company"]);
		$query .= "
		 AND company IN('".$company_filter."')
		";
	}
	if(isset($_POST["cooler_type"]))
	{
		$cooler_type_filter = implode("','", $_POST["cooler_type"]);
		$query .= "
		 AND cooler_type IN('".$cooler_type_filter."')
		";
	}
	if(isset($_POST["max_tdp"]))
	{
		$max_tdp_filter = implode(",", $_POST["max_tdp"]);
		$query .= "
		 AND max_tdp IN(".$max_tdp_filter.")
		";
	}




	$query .= "order by `price` ";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '
	<div class="col-sm-4 col-lg-4 col-md-4">
	<center>
		<div style="border:1px solid #ccc; border-radius:5px; padding:16px; width:180px; margin-bottom:16px; height:440px;">
			<img src="../project/gpu/none.png" width="150px" height="150px" >
			<p align="center"><strong>default CPU fan</strong></p>
			<h4 style="text-align:center;" class="text-danger" >₹ 0</h4>
			<p>Manufacture : Intel/AMD <br />
			Type : Box cooling <br  />
			MAX Cooling TDP:50 W <br  />

			<br>
			<i class="fa fa-shopping-cart"></i>
			<input type="submit" name="submite" class="btn btn-primary" value="Add to Cart" onclick="one(\'none\')">
			</center>
		</div>

	</div>
	';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-4 col-lg-4 col-md-4">
			<center>
				<div style="border:1px solid #ccc; border-radius:5px; padding:13px; width:180px; margin-bottom:16px; height:440px;">
					<img src="../project/fan/'. $row['pic'] .'" width="150px" height="150px" >
					<p align="center"><strong>'. $row['name'] .'</strong></p>
					<h4 style="text-align:center;" class="text-danger" >₹ '. $row['price'] .'</h4>
					<p>Manufacture : '. $row['company'].' <br />
					Type : '. $row['cooler_type'] .' <br  />
					MAX Cooling TDP:'. $row['max_tdp'] .'W <br  />
					Sold By : '. $row['sold_by'] .' <br  />
					<br>
					<i class="fa fa-shopping-cart"></i>
					<input type="submit" name="submit" class="btn btn-primary" value="Add to Cart" onclick="one(\''.$row['name'].'\')">
					</center>
				</div>

			</div>
			';
		}
	}
	else
	{

		$output = '<h3>No Data Found</h3>';
	}
	?>
</form>
	<?php
	echo $output;
	// echo $query;
}

?>
