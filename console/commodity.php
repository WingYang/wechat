<?php
	
	class commodity {
		function commodity_msg($id){
			$sql = "select * from commodity where commodity_id = $id";
			$db = $this->db_connect();
			$exec = $db['conn']->query($sql);
			$result = $exec->fetch_array();
			$commodity = array(
				"name" => $result['commodity_name'],
				"img" => $result['commodity_img'],
				"desc" => $result['commodity_desc'],
				"price" => $result['commodity_price'],
				"sale" => $result['commodity_sale']
			);
			return $commodity;
		}	
	}
?>