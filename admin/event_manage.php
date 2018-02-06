<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/db/mysqlifunction.php';
	$page_title = 'Event Managment';
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = 'Event Managment';
	$banner_content = '';
	$banner_image = '';

	$usertype = '1';
	$content = '
		<h3>To add a new event <a href="event_add.php">Click here</a></h3>
		<section>' . getEvents() . '</section>';
		
	function getEvents() {
		$query = "SELECT * FROM EVENT;";
		$result = db_query($query);
		
		$table = '<table class="table">';
		$table .= '<tr> 
			<th scope="col">NAME</th>
			<th scope="col">TIME</th>
			<th scope="col">LOCATION</th>
			<th scope="col">DESCRIPTION</th>
			<th scope="col">LINK</th>
			<th scope="col">REMOVE</th>
		</tr>';
		
		while($row = mysqli_fetch_array($result)){
			$table .= "<tr>" .
				'<td scope="row">' . $row['NAME'] . '</td>' .
				'<td>' . $row['STARTTIME'] . ' - ' . $row['ENDTIME'] . '</td>' .
				'<td><a href="' . $row['LOCATIONLINK'] .'">' . $row['LOCATION'] . '</a></td>' .
				'<td>' . $row['DESCRIPTION'] . '</td>' .
				'<td><a href="' . $row['LINK'] .'">Click here</a></td>' .
				'<td><a href="scripts/event.php?a=delete&id=' . $row['ID'] . '">Delete</a></td>' .
				"</tr>";
		}
		return $table . "</table>";
	}
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';	
	


?>