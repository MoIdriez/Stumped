<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/generateForm.php';

	$page_title = 'Add a story';
	$page_css = '';
	$page_js = '';

	$header_main = 'stories';
	$header_sub = 'storiesYour';

	$banner_title = '';
	$banner_content = '';
	$banner_image = '';

	$content = generateForm(
	'Your Story',
	'Story',
	'/stumped-final/scripts/php/contact.php'	
	);
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';
?>
</body>
</html>