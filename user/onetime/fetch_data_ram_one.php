<?php
session_start();
//fetch_data.php

include('../../database/database_connection.php');

if(isset($_POST["action"]))
{

	$query = "
		SELECT * FROM ram_tbl where status=1
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
	if(isset($_POST["ram_type"]))
	{
		$ram_type_filter = implode("','", $_POST["ram_type"]);
		$query .= "
		 AND ram_type IN('".$ram_type_filter."')
		";
	}
	if(isset($_POST["ram_size"]))
	{
		$ram_size_filter = implode(",", $_POST["ram_size"]);
		$query .= "
		 AND ram_size IN(".$ram_size_filter.")
		";
	}

	if(isset($_POST["mem_freq"]))
	{
		$mem_freq_filter = implode("','", $_POST["mem_freq"]);
		$query .= "
		 AND mem_freq IN('".$mem_freq_filter."')
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
			<div class="col-sm-4 col-lg-3 col-md-3">
			<center>
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:550px;">
					<img src="../../project/ram/'. $row['pic'] .'" width="150px" height="150px" >
					<p align="center"><strong>'. $row['name'] .'</strong></p>
					<h4 style="text-align:center;" class="text-danger" >₹ '. $row['price'] .'</h4>
					<p>RAM Type : '. $row['ram_type'].' <br />
					RAM Size : '. $row['ram_size'] .' GB<br  />
					Memory Frequency: '. $row['mem_freq'] .' Mhz <br />
					FSB : '. $row['fsb'] .' <br />
					Voltage: '. $row['voltage'] . 'V <br />
					Timing: '. $row['timing'] .' <br />

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
