<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/db/mysqlifunction.php';
	
	session_start();
	if (isset($_SESSION['USERTYPEID']) && $_SESSION['USERTYPEID'] == "1") {
		$name = $_POST['nm'];
		$title = $_POST['title'];
		$quote = $_POST['quote'];
		$story = $_POST['story'];
		
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
		header('Location: ' . '/stumped-final/home.php'. '?p=failed');
	}

?>