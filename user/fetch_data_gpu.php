<?php
session_start();
//fetch_data.php

include('../database/connection.php');

if(isset($_POST["action"]))
{
// $ram_type=$_SESSION['ram_type'];
	$query = "
		SELECT * FROM gpu_tbl where verified=1 and status=1
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
	if(isset($_POST["processor"]))
	{
		$processor_filter = implode("','", $_POST["processor"]);
		$query .= "
		 AND processor IN('".$processor_filter."')
		";
	}
	if(isset($_POST["mem_type"]))
	{
		$mem_type_filter = implode("','", $_POST["mem_type"]);
		$query .= "
		 AND mem_type IN('".$mem_type_filter."')
		";
	}

	if(isset($_POST["mem_size"]))
	{
		$mem_size_filter = implode("','", $_POST["mem_size"]);
		$query .= "
		 AND mem_size IN('".$mem_size_filter."')
		";
	}
	if(isset($_POST["pow_con"]))
	{
		$pow_con_filter = implode("','", $_POST["pow_con"]);
		$query .= "
		 AND pow_con IN('".$pow_con_filter."')
		";
	}
	if(isset($_POST["purpose"]))
	{
		$purpose_filter = implode("','", $_POST["purpose"]);
		$query .= "
		 AND purpose IN('".$purpose_filter."')
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
		<div style="border:1px solid #ccc; border-radius:5px;  width:180px; padding:16px; margin-bottom:16px; height:510px;">
			<img src="../project/gpu/none.png" width="100px" height="100px" >
			<p align="center"><strong> None</strong></p>
			<h4 style="text-align:center;" class="text-danger" >₹ 0</h4>
			<p>Processor : None <br />
			Core Freq : None <br  />
			Memory Freq: None <br />
			Memory Type : None <br />
			Memory Size: None <br />
			Memory Width: None <br />
			Power Conn. :None <br />
			Purpose :None <br />

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
				<div style="border:1px solid #ccc; border-radius:5px; width:180px; padding:13px; margin-bottom:16px; height:510px;">
					<img src="../project/gpu/'. $row['image'] .'" width="130px" height="130px" >
					<p align="center"><strong>'. $row['name'] .'</strong></p>
					<h4 style="text-align:center;" class="text-danger" >₹ '. $row['price'] .'</h4>
					<p>Processor : '. $row['processor'].' <br />
					Core Freq : '. $row['core_freq'] .' <br  />
					Memory Freq: '. $row['mem_freq'] .' <br />
					Memory Type : '. $row['mem_type'] .' <br />
					Memory Size: '. $row['mem_size'] . ' <br />
					Memory Width: '. $row['mem_width'] .' <br />
					Power Conn. :'. $row['pow_con'] .' <br />
					Purpose :'. $row['purpose'] .' <br />
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
