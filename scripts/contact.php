<?php 

	include "db/mysqlifunction.php";
	
	$title = $_POST['title'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$usertype = $_POST['usertype'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$query = "INSERT INTO CONTACT (
	CONTACTTYPEID,
	TITLE,
	FIRSTNAME,
	LASTNAME,
	USERTYPE,
	GENDER,
	AGEGROUP,
	EMAIL,
	PHONENUMBER,
	SUBJECT,
	MESSAGE
	) VALUES (
	1,
	'$title',
	'$firstname',
	'$lastname',
	'$usertype',	
	'$gender',
	'$age',
	'$email',
	'$phone',
	'$subject',
	'$message'
	);";
	
	$result = db_query($query);
	if($result === false) {
		$error = db_error();
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?r=fail');	
	}
	header('Location: ' . $_SERVER['HTTP_REFERER'] . '?r=success');	
?>

