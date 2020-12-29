<?php
session_start();
//fetch_data.php

include('../../database/database_connection.php');

if(isset($_POST["action"]))
{
// $socket=$_SESSION['socket'];
	$query = "
		SELECT * FROM cpu_tbl where verified=1 and status=1
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
	if(isset($_POST["socket"]))
	{
		$socket_filter = implode("','", $_POST["socket"]);
		$query .= "
		 AND socket IN('".$socket_filter."')
		";
	}
	if(isset($_POST["purpose"]))
	{
		$purpose_filter = implode("','", $_POST["purpose"]);
		$query .= "
		 AND purpose IN('".$purpose_filter."')
		";
	}
	if(isset($_POST["core"]))
	{
		$core_filter = implode(",", $_POST["core"]);
		$query .= "
		 AND core_count IN(".$core_filter.")
		";
	}

	if(isset($_POST["igpu"]))
	{
		$igpu_filter = implode("','", $_POST["igpu"]);
		$query .= "
		 AND igpu IN('".$igpu_filter."')
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
					<img src="../../project/cpu/'. $row['pic'] .'" width="150px" height="150px" >
					<p align="center"><strong>'. $row['name'] .'</strong></p>
					<h4 style="text-align:center;" class="text-danger" >₹ '. $row['price'] .'</h4>
					<p>Socket : '. $row['socket'].' <br />
					Core Count : '. $row['core_count'] .' Nos<br  />
					Thread Count: '. $row['thread_count'] .' Nos<br />
					Frequency : '. $row['frequency'] .' Mhz<br />
					Turbo boost: '. $row['turboboost'] .' <br />
					GPU: '. $row['igpu'] .' <br />
					Cache : '. $row['cache'] .' Kb <br />
					Lithography : '. $row['lithography'] .' <br />
					Max Temp : '. $row['max_temp'] .' °C<br />
					Purpose : '. $row['purpose'] .'</p>
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
