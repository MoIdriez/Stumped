<?php
	include "db/mysqlifunction.php";
	
	if (isset($_POST["action"]) && !empty($_POST["action"])) {
		$action = $_POST["action"];
		
		switch($action) {
			case "getEvents":
				getEvents();
				break;
		}
	}
	
	function getEvents() {		
		$query = "SELECT * FROM EVENT;";
		$result = db_query($query);
		
		$return = array();
		while($row =mysqli_fetch_assoc($result))
		{
			$return[] = $row;
		}
		echo json_encode($return);
	}
?>