<?php
	$page_title = 'Event for Professionals';
	$page_css = '';
	$page_js = '';

	$header_main = 'professional';
	$header_sub = 'professionalEvents';

	$banner_title = '';
	$banner_content = '';
	$banner_image = '/content/image/Photo1.jpg';

	$usertype = '12';

	$content = '
	
	<!-- Intro -->
<section>
	<h1>Events for Healthcare Professional</h1>
	<div id="calendar"></div>
</section>
<!-- Intro -->
	
	';
	$page_css = '
	<link rel="stylesheet" href="/stumped-final/scripts/css/bootstrap-year-calendar.min.css">
	';
	$page_js = '
	<script> var usertypeid = "2"; </script>
	<script src="/stumped-final/scripts/js/bootstrap-year-calendar.js"></script>
	<script src="/stumped-final/scripts/js/calendar.js"></script>
	';
	
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';
?>