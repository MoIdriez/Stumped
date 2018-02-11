<?php
	include 'utility.php';
	$page_title = 'ACTIVITIES';
	$page_css = '';
	$page_js = '';

	$header_main = 'forYou';
	$header_sub = 'forYouServices';

	$banner_title = 'ACTIVITIES';
	$banner_content = 'Stumped! offers you information about the services available to support you get active before and/or after your amputation.';
	$banner_image = '/content/image/Photo5.jpg';

	$usertype = '';

	$content = 	
		standard(
			'Fluid Motion',
			'<p>Fluid Motion is a water-based rehabilitation programme designed to be fun and beneficial for people with a range of health issues. Water-based rehabilitation can also be called aquatic therapy or hydrotherapy.</p>
			<p><b>Website:</b> http://www.fluid-motion.org.uk/home.html</p>
			<p><b>Contact:</b></p>
			<ul style="list-style-type: circle; text-align: left;">
				<li>e-mail: info@fluid-motion.org.uk</li>
				<li>Telephone: 07720 574 164</li>
			</ul>
			<p>Testimonials: <b class="text-danger"><i>This page is in progress</i></b></p>',
			'',
			'fa-wheelchair-alt'
		) . '
		<p><b>If you know of any services that can benefit amputees and their family, please contact us <a href="document_root/aboutUs/contact.php">here</a>.</b></p>
		
		'; 
	include $_SERVER['DOCUMENT_ROOT'] . '/scripts/php/layout/master.php';
?>