<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/scripts/php/generateForm.php';

	$page_title = 'Your Story Page';
	$page_css = '';
	$page_js = '';

	$header_main = 'stories';
	$header_sub = 'storiesYour';

	$banner_title = '';
	$banner_content = '';
	$banner_image = '/content/image/Photo2.jpg';

	$usertype = '';
	$content = generateForm(
	'Your Story',
	'Story',
	'document_root/scripts/php/contact.php'	
	);
	include $_SERVER['DOCUMENT_ROOT'] . '/scripts/php/layout/master.php';
?>