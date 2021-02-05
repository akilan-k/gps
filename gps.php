<?php 

	if(isset($_GET['busid'])){

		$busid = $_GET['busid'];
		$tm = $_GET['fx'];
		$lt = $_GET['lt'];
		$ln = $_GET['ln'];
		$sv = $_GET['sv'];
		$ha = $_GET['ha'];
		$gs = $_GET['gs'];
		$hd = $_GET['hd'];

		echo "Latitude : " . $lt;
		echo "Longitude: " . $ln;
		echo "Time: " . $tm;
	}

 ?>