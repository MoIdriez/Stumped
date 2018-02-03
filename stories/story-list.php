<?php
	include 'utility.php';
	$page_title = 'INSPIRATIONAL STORIES';
	$page_css = '';
	$page_js = '';

	$header_main = 'stories';
	$header_sub = 'storiesList';

	$banner_title = 'INSPIRATIONAL STORIES';
	$banner_content = 'Read other’s experiences of going through an amputation.<br>Access the VOLUNTEER PEER SCHEME <a href="http://www.limbless-association.org/index.php/information/volunteer-visitors">HERE</a> offered by Limbless association to talk to a volunteer who has been in a similar situation.<br>No one should go through this alone!
	';
	$banner_image = '/content/image/Image for Inspirational Stories.jpg';

	$content = getStories() . '
		<!-- Content 5 -->
		<section>
			<h3 class="edu" style="text-align:center">Do you think your story could benefit others going through this life changing event? Contact us <a href="story.php"><u>here</u></a>.</h3>
		</section>
		<!-- Content 5 -->
	';
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';
?>