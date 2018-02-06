<?php
	$page_title = 'Login';
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = '';
	$banner_content = '';
	$banner_image = '';

	$content = '';

	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/db/mysqlifunction.php';
	
	if (isset($_POST['EMAIL']) and isset($_POST['PASSWORD'])){
	$EMAIL = $_POST['EMAIL'];
	$PASSWORD = $_POST['PASSWORD'];
			
	//Checking the values are existing in the database or not
	$query = "SELECT * FROM USER WHERE EMAIL='$EMAIL' and PASSWORD='$PASSWORD';";
			 
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);
			
	if ($count < 1){
	echo "invalid login";
	}
	else {
	echo "login success";
	echo "<br>";
	echo "<a href='user_check_database.php'>continue login</a>";
	}

?>