<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/db/mysqlifunction.php';
	
	$page_title = 'Check Users';
	
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = 'Check Users';
	$banner_content = '';
	$banner_image = '';

	$content = '
		<h3>
			<a href="add_user_form.php">Add a user</a>
		</h3>
	' . getUsers();
		
	function getUsers() {
		$query = "SELECT * FROM USER;";
		$result = db_query($query);
		
		$Users = "<table border='1' cellpadding='10'>";
		$Users .= "<tr> <th>ID</th> <th>USERTYPEID</th> <th>EMAIL</th> <th>PASSWORD</th> <th>ISVERIFIED</th> <th>Edit</th> <th>Delete</th> </tr>";
		
		while($row = mysqli_fetch_array($result)){
			$Users .= "<tr>" .
				'<td>' . $row['ID'] . '</td>' .
				'<td>' . $row['USERTYPEID'] . '</td>' .
				'<td>' . $row['EMAIL'] . '</td>' .
				'<td>' . $row['PASSWORD'] . '</td>' .
				'<td>' . $row['ISVERIFIED'] . '</td>' .
				"<td><a href=\"user_edit.php?ID=$row[ID]\">Edit</a></td>" .
				"<td><a href=\"user_delete.php?ID=$row[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>" .
				"</tr>";
		}
		return $Users . "</table>";
	}
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';		
?>