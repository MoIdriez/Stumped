<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/db/mysqlifunction.php';
	
	$page_title = 'Check Events';
	
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = 'Check Events';
	$banner_content = '';
	$banner_image = '';

	$content = '
		<h3>
			<a href="add_event.php">Add a event</a>
		</h3>
	' . getEvents();
		
	function getEvents() {
		$query = "SELECT * FROM EVENT;";
		$result = db_query($query);
		
		$Events = "<table border='1' cellpadding='10'>";
		$Events .= "<tr> <th>ID</th> <th>USERTYPEID</th> <th>NAME</th> <th>STARTTIME</th> <th>ENDTIME</th> <th>LOCATION</th> <th>LOCATIONLINK</th> <th>DESCRIPTION</th> <th>LINK</th> <th>Edit</th> <th>Delete</th> </tr>";
		
		while($row = mysqli_fetch_array($result)){
			$Events .= "<tr>" .
				'<td>' . $row['ID'] . '</td>' .
				'<td>' . $row['USERTYPEID'] . '</td>' .
				'<td>' . $row['NAME'] . '</td>' .
				'<td>' . $row['STARTTIME'] . '</td>' .
				'<td>' . $row['ENDTIME'] . '</td>' .
				'<td>' . $row['LOCATION'] . '</td>' .
				'<td>' . $row['LOCATIONLINK'] . '</td>' .
				'<td>' . $row['DESCRIPTION'] . '</td>' .
				'<td>' . $row['LINK'] . '</td>' .
				'<td><a href="edit_event.php?ID=' . $row['ID'] . '">Edit</a></td>' .
				'<td><a href="delete_event?ID=' . $row['ID'] . '">Delete</a></td>' .
				"</tr>";
		}
		return $Events . "</table>";
	}
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';		
?>