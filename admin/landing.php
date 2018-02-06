<?php
	

	$page_title = 'Admin Landing';
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = 'Admin Panel';
	$banner_content = '';
	$banner_image = '';

	$usertype = '1';
	$content = '
		<h3>To manage users <a href="user_manage.php">click here</a></h3>
		<h3>To manage events <a href="event_manage.php">click here</a></h3>
		<h3>To manage contacts <a href="contact_manage.php">click here</a></h3>
		<h3>To manage stories <a href="story_manage.php">click here</a></h3>
	';
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';
	


?>