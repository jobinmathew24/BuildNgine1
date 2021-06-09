<?php
session_start();
//fetch_data.php

include('../database/connection.php');

if(isset($_POST["action"]))
{

	$query = "
		SELECT * FROM cabinet_tbl where verified=1 and status=1
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
			<div class="col-sm-4 col-lg-4 col-md-4">
			<center>
				<div style="border:1px solid #ccc; border-radius:5px; padding:13px; width:180px; margin-bottom:16px; height:450px;">
					<img src="../project/cabinet/'. $row['pic'] .'" width="150px" height="150px" >
					<p align="center"><strong>'. $row['name'] .'</strong></p>
					<h4 style="text-align:center;" class="text-danger" >₹ '. $row['price'] .'</h4>
					<p>Manufacture : '. $row['company'].' <br />
					Model : '. $row['model'].' <br />
					Integrated power : '. $row['int_power'] .' <br  />
					Power Supply : '. $row['pow_sup'] .' <br  />
					Sold By : '. $row['sold_by'] .' <br  />
					<br>
					<i class="fa fa-shopping-cart"></i>
					<input type="submit" name="submit" class="btn btn-primary"
					value="Add to Cart" onclick="one(\''.$row['name'].'\')">
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
