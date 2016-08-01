<?php
	class db_class {
		function connect(){
			$conn = new mysqli;
			$db = $conn->connect(DBHOST,DBUSER,DBPWD,DBNAME);
			$database = array (
				'conn' => $conn,
				'db' => $db
			);
			return $database;
		}
	}
?>