<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/db/mysqlifunction.php';
	$page_title = 'User Managment';
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = 'User Managment';
	$banner_content = '';
	$banner_image = '';

	$usertype = '1';
	$content = '<section>' . getUsers() . '</section>';
		
	function getUsers() {
		$query = "SELECT * FROM USER;";
		$result = db_query($query);
		
		$table = '<table class="table">';
		$table .= '<tr> 
			<th scope="col">EMAIL</th>
			<th scope="col">USERTYPEID</th>
			<th scope="col">STATUS</th>
			<th scope="col">DELETE</th>
		</tr>';
		
		while($row = mysqli_fetch_array($result)){
			$table .= "<tr>" .
				'<td scope="row">' . $row['EMAIL'] . '</td>' .
				'<td>' . ($row['USERTYPEID'] == "1" ? "Admin" : "Professional") . '</td>' .
				'<td><a href="scripts/user.php?a=verify&v=' . $row['ISVERIFIED'] . '&id=' . $row['ID'] . '">' . ($row['ISVERIFIED'] == "1" ? "VERIFIED" : "UNVERIFIED") . '</a></td>' .
				'<td><a href="scripts/user.php?a=delete&id=' . $row['ID'] . '">Delete</a></td>' .
				"</tr>";
		}
		return $table . "</table>";
	}
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';	
	


?>