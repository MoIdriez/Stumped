<?php

	include "../db/mysqlifunction.php";
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$query = "SELECT USERTYPEID, PASSWORD, ISVERIFIED FROM USER WHERE EMAIL = '$email'";
	$result = db_query($query);
	if($result === false) {
		$error = db_error();
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?l=fail');
	} else {
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row['PASSWORD']) && $row['ISVERIFIED'] === "1") {
			$dr = substr($_SERVER['HTTP_REFERER'], 0, strpos($_SERVER['HTTP_REFERER'], 'login'));
			if (session_status() == PHP_SESSION_NONE) { session_start(); }
			$_SESSION["EMAIL"] = $email;
			$_SESSION["USERTYPEID"] = $row['USERTYPEID'];
			// if professional
			if ($row['USERTYPEID'] == "2") {
				header('Location: ' . $dr . 'index.php'. '?l=success');
			} else if ($row['USERTYPEID'] == "1") {
				header('Location: ' . $dr . 'admin/landing.php');
			}			
			
		} else {			
			header('Location: ' . $_SERVER['HTTP_REFERER'] . '?l=fail');
		}
	}

?>