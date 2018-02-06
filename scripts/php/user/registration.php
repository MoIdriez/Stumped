<?php

	include "../db/mysqlifunction.php";
	
	$email = $_POST['email'];
	$user_type = $_POST['user_type'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	
	$query = "INSERT INTO USER (
	USERTYPEID,
	EMAIL,
	PASSWORD,
	ISVERIFIED
	) VALUES (
	'$user_type',
	'$email',
	'$password',
	0
	);";
	
	$result = db_query($query);
	if($result === false) {
		$error = db_error();
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?u=fail');	
	} else {
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?u=success');	
	}

?>