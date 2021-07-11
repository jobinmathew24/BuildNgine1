<?php
$connect = new PDO("mysql:host=localhost;dbname=bulid", "root", "");
$con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");
date_default_timezone_set("Asia/Kolkata");
  $date=date("Y/m/d");
?>
<?php
		// if (function_exists('conectar')){
		//
		// } else {
		//
		// function conectar(){
		//
		// 		//$connection = mysqli_connect("localhost", 'root', '', 'cl_water_sys');
		//
		// 		$user = getenv('CLOUDSQL_USER');
		// 		$pass = getenv('CLOUDSQL_PASSWORD');
		// 		$inst = getenv('CLOUDSQL_DSN');
		// 		$db = getenv('CLOUDSQL_DB');
		// 		$con = mysqli_connect(null, $user, $pass, $db, null, $inst);
    //     $connect = new PDO($inst,$user,$pass);
			/*	$now = new DateTime();
				$mins = $now->getOffset() / 60;
				$sgn = ($mins < 0 ? -1 : 1);
				$mins = abs($mins);
				$hrs = floor($mins / 60);
				$mins -= $hrs * 60;
				$offset = sprintf('%+d:%02d', $hrs*$sgn, $mins);
				$connection->query("SET time_zone='$offset'");
			    $connection->query("SET lc_time_names = 'es_ES'"); */
				// if (!$con) {
				// 		echo "Error!".mysqli_connect_error();
				// 	}
        //   else {
        //     // code...
        //     return $con;
        //   }
        //   if (!$connect) {
        //       echo "Error!".mysqli_connect_error();
        //     }
        //     else {
        //       // code...
        //       return $connect;
        //     }
		// }
		// }


?>
