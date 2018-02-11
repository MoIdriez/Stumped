<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/scripts/php/db/mysqlifunction.php';
	$page_title = 'Contact Managment';
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = 'Contact Managment';
	$banner_content = '';
	$banner_image = '';

	$usertype = '1';
	$content = '<section>' . getContact() . '</section>';
		
	function getContact() {
		$query = "SELECT * FROM CONTACT;";
		$result = db_query($query);
		
		$table = '<table class="table">';
		$table .= '<tr> 
			<th scope="col">Name</th>
			<th scope="col">USERTYPE</th>
			<th scope="col">Amputation</th>
			<th scope="col">Gender</th>
			<th scope="col">Agegroup</th>
			<th scope="col">Email</th>
			<th scope="col">Phone number</th>
			<th scope="col">Subject</th>
			<th scope="col">Message</th>
			<th scope="col">DELETE</th>
		</tr>';
		
		while($row = mysqli_fetch_array($result)){
			$table .= "<tr>" .
				'<td scope="row">' . $row['TITLE'] . '' . $row['FIRSTNAME'] . '' . $row['LASTNAME'] . '</td>' .
				'<td>' . $row['USERTYPE'] . '</td>' .
				'<td>' . $row['AMPUTATION'] . '</td>' .
				'<td>' . $row['GENDER'] . '</td>' .
				'<td>' . $row['AGEGROUP'] . '</td>' .
				'<td>' . $row['EMAIL'] . '</td>' .
				'<td>' . $row['PHONENUMBER'] . '</td>' .
				'<td>' . $row['SUBJECT'] . '</td>' .
				'<td>' . $row['MESSAGE'] . '</td>' .
				'<td><a href="scripts/contact.php?a=delete&id=' . $row['ID'] . '">Delete</a></td>' .
				"</tr>";
		}
		return $table . "</table>";
	}
	include $_SERVER['DOCUMENT_ROOT'] . '/scripts/php/layout/master.php';	
	


?>