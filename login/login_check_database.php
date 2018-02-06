<?php
	$page_title = 'User Login';
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = '';
	$banner_content = '';
	$banner_image = '';

	$content = '
<!-- Content -->
<section>
	<div class="container">
		<h3><a href="check_users.php" class="title">User List</a></h3>
		<h3><a href="check_stories.php" class="title">Story List</a></h3>
		<h3><a href="check_events.php" class="title">Event List</a></h3>
		<h3><a href="check_contacts.php" class="title">Contact List</a></h3>
	</div>	
</section>
<!-- Content -->
	';
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';


?>