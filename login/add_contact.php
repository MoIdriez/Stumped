<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/db/mysqlifunction.php';
	
	$page_title = 'Check Contacts';
	
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = 'Check Contacts';
	$banner_content = '';
	$banner_image = '';

	$content = '';
 
	if(isset($_POST['Submit'])) {    
		$TITLE = $_POST['TITLE'];
		$FIRSTNAME = $_POST['FIRSTNAME'];
		$LASTNAME = $_POST['LASTNAME'];
		$USERTYPE = $_POST['USERTYPE'];
		$AMPUTATION = $_POST['AMPUTATION'];
		$GENDER = $_POST['GENDER'];
		$AGEGROUP = $_POST['AGEGROUP'];
		$EMAIL = $_POST['EMAIL'];
		$PHONENUMBER = $_POST['PHONENUMBER'];
		$SUBJECT = $_POST['SUBJECT'];
		$MESSAGE = $_POST['MESSAGE'];
        
		// Connect to the database
		$connection = db_connect();
		
        //insert data to database
        $insert_query = "INSERT INTO CONTACT(TITLE,FIRSTNAME,LASTNAME,USERTYPE,AMPUTATION,GENDER,AGEGROUP,EMAIL,PHONENUMBER,SUBJECT,MESSAGE) VALUES('$TITLE','$FIRSTNAME','$LASTNAME','$USERTYPE','$AMPUTATION','$GENDER','$AGEGROUP','$EMAIL','$PHONENUMBER','$SUBJECT','$MESSAGE')";
		$result = mysqli_query($connection,$insert_query);
    }
?>