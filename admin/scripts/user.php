<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/db/mysqlifunction.php';
	
	session_start();
	if (isset($_SESSION['USERTYPEID']) && $_SESSION['USERTYPEID'] == "1") {
		$action = $_GET['a'];
		$id = $_GET['id'];

		switch ($action) {
			case "verify":
				$v = $_GET['v'] == "1" ? "0" : "1";
				$query = "UPDATE USER SET ISVERIFIED = '$v' WHERE ID = '$id'";
				executeUser($query);				
				break;
			case "delete":
				$query = "DELETE FROM USER WHERE ID = '$id'";
				executeUser($query);
				break;
		}
	} else {
		header('Location: ' . '/stumped-final/home.php'. '?p=failed');
	}

	function executeUser($query) {
		$result = db_query($query);
		if($result === false) {
			header('Location: ' . $_SERVER['HTTP_REFERER'] . '?op=fail');	
		} else {
			header('Location: ' . $_SERVER['HTTP_REFERER'] . '?op=success');	
		}
	}

?>