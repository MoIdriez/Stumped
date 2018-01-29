<?php
	$page_title = 'Events';

	$header_main = 'forYou';
	$header_sub = 'forYouPatient';

	$banner_title = 'Event for Patient';
	$banner_content = 'A list of events on various themes, in and around Oxfordshire that you and your family can attend.';
	$banner_image = '/content/image/Photo13.jpg';

	$content = '
	<section>
		<div id="calendar"></div>
	</section>
	<h3 style="text-align:center">If you know of any other events that you would like to share, contact us <a href="document_root/aboutUs/contact.php"><u>here</u></a>.</h3>';
	
	$page_css = '
	<link rel="stylesheet" href="/stumped-final/scripts/css/bootstrap-year-calendar.min.css">
	';
	$page_js = '
	<script> var usertypeid = "3"; </script>
	<script src="/stumped-final/scripts/js/bootstrap-year-calendar.js"></script>
	<script src="/stumped-final/scripts/js/calendar.js"></script>
	';
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';
?>