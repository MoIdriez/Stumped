<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/scripts/php/db/mysqlifunction.php';
	$page_title = 'Story Managment';
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = 'Story Managment';
	$banner_content = '';
	$banner_image = '';

	$usertype = '1';
	$content = '
		<h3>To add a new story <a href="story_add.php">Click here</a></h3>
		<section>' . getStories() . '</section>';
		
	function getStories() {
		$query = "SELECT * FROM Story;";
		$result = db_query($query);
		
		$table = '<table class="table">';
		$table .= '<tr> 
			<th scope="col">NAME</th>
			<th scope="col">TITLE</th>
			<th scope="col">QUOTE</th>
			<th scope="col">STORY</th>
			<th scope="col">DELETE</th>
		</tr>';
		
		while($row = mysqli_fetch_array($result)){
			$table .= "<tr>" .
				'<td scope="row">' . $row['NAME'] . '</td>' .
				'<td>' . $row['TITLE'] . '</td>' .
				'<td>' . $row['QUOTE'] . '</td>' .
				'<td>' . $row['STORY'] . '</td>' .
				'<td><a href="scripts/story.php?a=delete&id=' . $row['ID'] . '">Delete</a></td>' .
				"</tr>";
		}
		return $table . "</table>";
	}
	include $_SERVER['DOCUMENT_ROOT'] . '/scripts/php/layout/master.php';	
	


?>