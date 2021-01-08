<?php

//fetch_data.php

include('../database/database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM prebuilt_tbl where status=1
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}

	if(isset($_POST["category"]))
	{
		$category_filter = implode("','", $_POST["category"]);
		$query .= "
		 AND category IN('".$category_filter."')
		";
	}

	if(isset($_POST["ram_type"]))
	{
		$ram_filter = implode("','", $_POST["ram_type"]);
		$query .= "
		 AND ram_type IN('".$ram_filter."')
		";
	}
	if(isset($_POST["ram_size"]))
	{
		$max_filter = implode("','", $_POST["ram_size"]);
		$query .= "
		 AND ram_size IN('".$max_filter."')
		";
	}

	$query .= "order by `price` ";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-12 col-lg-12 col-md-12">

				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:auto;">
					<img  style="float:left; padding:5px;"src="../project/cabinet/'.  $row['cabinet'] .'.jpg " width="100px" height="100px"  >

					<div style="float: left;">
						<h4><strong>'.$row['name'].'</strong></h4>

						</div>
				<table  >


					<tr ><td ><strong> Category</strong></td><td > : '. $row['category'] .'</td></tr>
					<tr ><td ><strong> Price</strong></td><td > : ₹ '. $row['price'] .'</td></tr>
					<tr><td ><strong> Created By</strong></td><td > : '. $row['loginid'] .'</td></tr>
				<tr>
					<h4  style="text-align:right;" class="text-danger" >₹ '. $row['price'] .'</h4>
					<br><br><br><br><br>
				</tr>

				</table>
				<div style="float: right;">
					<i class="fa fa-trash"></i>
					<input type="submit" name="delete" class="btn btn-danger" value="Delete" onclick="one(\''.$row['name'] .'\')">
					&nbsp;
					<i class="fa fa-archive"></i>
					<input type="submit" name="save" class="btn btn-warning" value="Save for later" onclick="one(\''.$row['name'] .'\')">
					&nbsp;
					<i class="fa fa-shopping-cart"></i>
					<input type="submit" name="submit" class="btn btn-primary" value="Purchase Now" onclick="one(\''.$row['name'] .'\')">

					</div>

					<br>
					<br>

				</div>

			</div>
			';
		}
	}
	else
	{
		// echo "$query";
		$output = '<h3>No Data Found</h3>';
	}

	echo $output;
	// echo $query;
}

?>
