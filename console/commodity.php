<?php
	include '/mobile/index.html';
	function show_commodity(){
		include '/console/db_class.php';
		$a = new db_class;
		$b = $a->commodity_msg("00001");
		echo "<img src='".$b['img']."'>".$b['name'];
	}
?>