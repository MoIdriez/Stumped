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

	$content = '
		<h3>
			<a href="add_contact_form.php">Add a contact</a>
		</h3>
	' . getContacts();
		
	function getContacts() {
		$query = "SELECT * FROM CONTACT;";
		$result = db_query($query);
		
		$Contacts = "<table border='1' cellpadding='10'>";
		$Contacts .= "<tr> <th>ID</th> <th>TITLE</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>USERTYPE</th> <th>AMPUTATION</th> <th>GENDER</th> <th>AGEGROUP</th> <th>EMAIL</th> <th>PHONENUMBER</th> <th>SUBJECT</th> <th>MESSAGE</th> <th>Edit</th> <th>Delete</th> </tr>";
		
		while($row = mysqli_fetch_array($result)){
			$Contacts .= "<tr>" .
				'<td>' . $row['ID'] . '</td>' .
				'<td>' . $row['TITLE'] . '</td>' .
				'<td>' . $row['FIRSTNAME'] . '</td>' .
				'<td>' . $row['LASTNAME'] . '</td>' .
				'<td>' . $row['USERTYPE'] . '</td>' .
				'<td>' . $row['AMPUTATION'] . '</td>' .
				'<td>' . $row['GENDER'] . '</td>' .
				'<td>' . $row['AGEGROUP'] . '</td>' .
				'<td>' . $row['EMAIL'] . '</td>' .
				'<td>' . $row['PHONENUMBER'] . '</td>' .
				'<td>' . $row['SUBJECT'] . '</td>' .
				'<td>' . $row['MESSAGE'] . '</td>' .
				'<td><a href="edit_contact.php?ID=' . $row['ID'] . '">Edit</a></td>' .
				'<td><a href="delete_contact?ID=' . $row['ID'] . '">Delete</a></td>' .
				"</tr>";
		}
		return $Contacts . "</table>";
	}
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';		
?>