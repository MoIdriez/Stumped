<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/scripts/php/db/mysqlifunction.php';
	
	if (session_status() == PHP_SESSION_NONE) { session_start(); }
	if (isset($_SESSION['USERTYPEID']) && $_SESSION['USERTYPEID'] == "1") {
		$USERTYPEID = $_POST['USERTYPEID'];
		$NAME = $_POST['NAME'];
		$STARTTIME = $_POST['STARTTIME'];
		$ENDTIME = $_POST['ENDTIME'];
		$LOCATION = $_POST['LOCATION'];
		$LOCATIONLINK = $_POST['LOCATIONLINK'];
		$DESCRIPTION = $_POST['DESCRIPTION'];
		$LINK = $_POST['LINK'];
		$query = "INSERT INTO STORY (
		NAME,
		TITLE,
		QUOTE,
		STORY
		) VALUES (
		'$name',
		'$title',
		'$quote',
		'$story'
		);";
		
		$result = db_query($query);
		if($result === false) {
			$error = db_error();
			//header('Location: ' . $_SERVER['HTTP_REFERER'] . '?op=fail');	
			echo db_error();
		} else {
			header('Location: ' . $_SERVER['HTTP_REFERER'] . '?op=success');	
		}
	} else {
		header('Location: ' . '/index.php'. '?p=failed');
	}

?>