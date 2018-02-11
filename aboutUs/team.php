<?php
	$page_title = 'MEET THE TEAM';
	$page_css = '';
	$page_js = '';

	$header_main = 'aboutUs';
	$header_sub = 'aboutUsTeam';

	$banner_title = 'MEET THE TEAM';
	$banner_content = 'We have set up to deliver a ‘one-stop’ website that offers information about services and best practice across the care pathway from prevention, pre-amputation, post amputation, and rehabilitation to patients themselves, their family and friends, and clinicians. This will ensure that collected expertise is easily available in one place and that patients are signposted to the latest, quality information to better understand their care pathway therefore increasing their autonomy and facilitating their ability to make informed decisions about their care.';
	$banner_image = '/content/image/Photo17.jpg';

	$usertype = '';
	
	$content = '	
		<!-- Intro -->
		<section>
			<h1>Team</h1>
		</section>
		<!-- Intro -->

		<!-- Content 1 -->
		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm order-sm-1" id="main-icon">
						<img class="image-team" src="document_root/content/image/Raluca Team Photo.JPG" alt="raluca">
					</div>
					<div class="col-sm order-sm-2" id="main-icon">
						<h3>Raluca Vagner</h3>
						<p class="blockquote">Passionate about supporting people to reach their potential and using innovative ways of achieving that. Has a strong social entrepreneurship drive in utilising current platforms for future needs. </p>
					</div>
				</div>
			</div>
		</section>
		
		<hr>
		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm order-sm-1 order-2" id="main-icon">
						<h3>Pedro Simas</h3>
						<p class="blockquote">Student nurse with a strong belief in giving everyone the opportunity to be themselves whilst understanding and embracing the physical and emotional changes brought by medical interventions. </p>
					</div>
					<div class="col-sm order-sm-2 order-1" id="main-icon">
						<img class="image-team image-rot" src="document_root/content/image/Pedro Team Photo.JPG" alt="pedro">						
					</div>
				</div>
			</div>
		</section>

		<hr>
		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm order-sm-1" id="main-icon">
						<img class="image-team image-rot" src="document_root/content/image/Misbah Team Photo.JPG" alt="misbah">
					</div>
					<div class="col-sm order-sm-2" id="main-icon">
						<h3>Misbah Munir</h3>
						<p class="blockquote">Computer Scientist by training, marketer by experience, teacher as a hobby but social entrepreneur by motivation. Passionate about using the diverse skill set to help people reach their true potential.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Content 3 -->
		<section>
			<div class="container">
				<div class="row">
					<p>Click <a href="document_root/aboutUs/contact.php"><u>here</u></a> to offer feedback / testimonials</p>
				</div>
			</div>
		</section>
		<!-- Content 3 -->
	
	';
	include $_SERVER['DOCUMENT_ROOT'] . '/scripts/php/layout/master.php';
?>