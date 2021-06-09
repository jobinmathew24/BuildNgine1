<?php
session_start();
//fetch_data.php

include('../database/connection.php');

if(isset($_POST["action"]))
{
// $ram_type=$_SESSION['ram_type'];
	$query = "
		SELECT * FROM memory_tbl where verified=1 and status=1 and form_factor in ('\"2.5','\"3.5')
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
	if(isset($_POST["type"]))
	{
		$type_filter = implode("','", $_POST["type"]);
		$query .= "
		 AND type IN('".$type_filter."')
		";
	}
	if(isset($_POST["size"]))
	{
		$size_filter = implode(",", $_POST["size"]);
		$query .= "
		 AND size IN(".$size_filter.")
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
				<div style="border:1px solid #ccc; border-radius:5px; padding:13px; width:180px; margin-bottom:16px; height:480px;">
					<img src="../project/mem/'. $row['pic'] .'" width="130px" height="130px" >
					<p align="center"><strong>'. $row['name'] .'</strong></p>
					<h4 style="text-align:center;" class="text-danger" >₹ '. $row['price'] .'</h4>
					<p>Memory Type : '. $row['type'].' <br />
					Memory Size : '. $row['size'] .' GB<br  />
					';
					if ($row['type'] == 'SSD')
					{
						$output .= 'SSD Type : '. $row['ssd_type'] .' <br  />Form Factor : '. $row['form_factor'] .' <br  />';
					}
					else {
						$output .= 'Form Factor : '. $row['form_factor'] .' <br  />';
					}
					$output .= '
						Sold By : '. $row['sold_by'] .' <br  />
					<br>
					<label>Quantity</label> <input type="number" style="width:70px" class="form-control" value="1" name="points" step="1" min=1 max=3>
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
