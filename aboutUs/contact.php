<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/generateForm.php';
	$page_title = 'Contact';
	$page_css = '';
	$page_js = '';

	$header_main = 'aboutUs';
	$header_sub = 'aboutUsContact';

	$banner_title = '';
	$banner_content = '';
	$banner_image = '';

	$page_js = '
	<script src="/stumped-final/scripts/js/map.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2-dk1ANjjHROY6WJ6Snbveyl9-CUuQlg"></script>
	';
	
	$content = '
		<!-- Map Section -->
		<div>
			<div id="map" style="width:100%;height:450px;"></div>
		</div>
		<!-- Map Section -->
		<section id="address">
			<h4 style="text-align:center;">Address: Gipsy Lane, Oxford - Email:  info@stumped.org.uk</h4>
		</section>
		' .
		generateForm(
		'Your Message',
		'Message',
		'/stumped-final/scripts/php/contact.php'	
		);
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';
?>