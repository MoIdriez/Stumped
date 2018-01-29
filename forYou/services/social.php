<?php
	include 'utility.php';
	$page_title = 'SOCIAL SUPPORT';
	$page_css = '';
	$page_js = '';

	$header_main = 'forYou';
	$header_sub = 'forYouServices';

	$banner_title = 'SOCIAL SUPPORT';
	$banner_content = 'Stumped! offers you information about the services available to support you through this life-changing event, from: support groups, NHS run organisations, charities and much more.';
	$banner_image = '/content/image/Photo6.jpg';

	$content = 	
		standard(
			'Support Groups',
			'<p>Social gatherings where amputees can relate to others, gain peer support and help promote social inclusion.</p>
			<p class="text-danger"><b><i>This page is in progress</i></b></p>',
			'',
			'fa-users'
		) . '<hr>' .
		alternative(
			'Charities',
			'<p>Often founded by amputees themselves, these provide support in mobility, finances, legal support, employment and education.</p>
			<p class="text-danger"><b><i>This page is in progress</i></b></p>',
			'',
			'fa-gbp'
		) . '<hr>' . 
		standard(
			'NHS Establishments',
			'<p>Diverse services run by the NHS that offer emotional, social and care support.</p>
			<p class="text-danger"><b><i>This page is in progress</i></b></p>',
			'',
			'fa-user-md'
		);
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';
?>