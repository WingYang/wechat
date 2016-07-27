<?php
	class db_class {
		var $conn;
		var $db;
		function db_connect(){
			include '/config.php';
			$conn = new MySQLi;
			$db = $conn->connect(HOST,DBUSER,DBPWD,DBNAME);
			if ($conn->error){
				var_dump("Could not connect mysql,please check config!");
			}
			else{
				$result = array('conn'=>$conn,'db'=>$db);
				return $result;
			}
		}
		
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