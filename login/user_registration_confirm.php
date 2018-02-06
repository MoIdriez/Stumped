<?php
	$page_title = 'New User';
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = '';
	$banner_content = '';
	$banner_image = '';

	$content = '';

	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/db/mysqlifunction.php';
	
	if(isset($_POST['Register'])) { 
		$USERTYPEID = $_POST['USERTYPEID'];
		$EMAIL = $_POST['EMAIL'];
		$PASSWORD = $_POST['PASSWORD'];
		
		// Connect to the database
		$connection = db_connect();
		
		//Display user details
		$insert_query = "INSERT INTO USER (USERTYPEID, EMAIL, PASSWORD) values ('$USERTYPEID', '$EMAIL', '$PASSWORD')";
		$result = mysqli_query($connection,$insert_query);

			echo "<b>Your new account<br>";
			echo "USERTYPEID: ", $USERTYPEID;
			echo "<br>";
			echo "EMAIL: ", $EMAIL;
			echo "<br>";
			echo "PASSWORD: ", $PASSWORD;
			echo "<br>";
			echo "<a href='user_login.php'>continue login</a>";
		}

?>