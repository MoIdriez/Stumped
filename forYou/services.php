<?php
	$page_title = 'Service';
	$page_css = '';
	$page_js = '';

	$header_main = 'forYou';
	$header_sub = 'forYouServices';

	$banner_title = 'SERVICES';
	$banner_content = 'Access information about public and private services that could support you in different stages of your care pathway.';
	$banner_image = '/content/image/Photo3.jpg';

	$content = '
	
<!-- Content1 -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm" id="main-icon">
				<a href="services/nurse-led.php" class="title"><i class="fa fa-user-md"></i></a>
				<h3><a href="services/nurse-led.php" class="title">Clinician led</a></h3>
				<p>Stumped! offers you information about the services that are run by healthcare professionals which you may encounter before and after amputation. This may include: hospital wards, diabetes foot clinic, rehabilitation centres and many others.
				</p>
			</div>
			<div class="col-sm" id="main-icon">
				<a href="services/social.php" class="title"><i class="fa fa-users"></i></a>
				<h3><a href="services/social.php" class="title">Social Support</a></h3>
				<p>Stumped! offers you information about the services available to support you through this life-changing event, from: support groups, NHS run organisations, charities and much more.</p>
			</div>
			<div class="col-sm" id="main-icon">
				<a href="services/rehab.php" class="title"><i class="fa fa-wheelchair-alt"></i></a>
				<h3><a href="services/rehab.php" class="title">Activities</a></h3>
				<p>Stumped! offers you information about the services available to support you get active before and/or after your amputation.</p>
			</div>
		</div>
	</div>	
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm" id="main-icon">
				<a href="services/educational.php" class="title"><i class="fa fa-graduation-cap"></i></a>
				<h3><a href="services/educational.php" class="title">Educational Support</a></h3>
				<p>Here we have collected clinical information about the practical questions regarding amputations. Please find a collection of leaflets provided by reliable sources.</p>
			</div>
			<div class="col-sm" id="main-icon">
				<a href="services/financial.php" class="title"><i class="fa fa-money"></i></a>
				<h3><a href="services/financial.php" class="title">Financial Information</a></h3>
				<p>A list of services you may want to consider when discussing financial implications of having an amputation.</p>
			</div>
			<div class="col-sm" id="main-icon">
				<a href="event-amputee.php" class="title"><i class="fa fa-calendar-check-o"></i></a>
				<h3><a href="event-amputee.php" class="title">Events</a></h3>
				<p>A list of events on various themes, in and around Oxfordshire that you and your family can attend.</p>
			</div>
		</div>
	</div>	
</section>
<!-- Content1 -->
	
	';
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';


?>


