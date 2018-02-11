<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/scripts/php/db/mysqlifunction.php';
	
	if (session_status() == PHP_SESSION_NONE) { session_start(); }
	if (isset($_SESSION['USERTYPEID']) && $_SESSION['USERTYPEID'] == "1") {
		$action = $_GET['a'];
		$id = $_GET['id'];

		switch ($action) {
			case "delete":
				$query = "DELETE FROM CONTACT WHERE ID = '$id'";
				executeUser($query);
				break;
		}
	} else {
		header('Location: ' . '/index.php'. '?p=failed');
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