<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/db/mysqlifunction.php';
	
	$page_title = 'Check Stories';
	
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = 'Check Stories';
	$banner_content = '';
	$banner_image = '';

	$content = '
		<h3>
			<a href="add_story.php">Add a story</a>
		</h3>
	' . getStories();
		
	function getStories() {
		$query = "SELECT * FROM STORY;";
		$result = db_query($query);
		
		$stories = "<table border='1' cellpadding='10'>";
		$stories .= "<tr> <th>ID</th> <th>NAME</th> <th>TITLE</th> <th>QUOTE</th> <th>STORY</th> <th>Edit</th> <th>Delete</th> </tr>";
		
		while($row = mysqli_fetch_array($result)){
			$stories .= "<tr>" .
				'<td>' . $row['ID'] . '</td>' .
				'<td>' . $row['NAME'] . '</td>' .
				'<td>' . $row['TITLE'] . '</td>' .
				'<td>' . $row['QUOTE'] . '</td>' .
				'<td>' . $row['STORY'] . '</td>' .
				'<td><a href="edit_story.php?ID=' . $row['ID'] . '">Edit</a></td>' .
				'<td><a href="delete_story?ID=' . $row['ID'] . '">Delete</a></td>' .
				"</tr>";
		}
		return $stories . "</table>";
	}
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';		
?>