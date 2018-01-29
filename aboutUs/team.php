<?php
	$page_title = 'Team';
	$page_css = '';
	$page_js = '';

	$header_main = 'aboutUs';
	$header_sub = 'aboutUsTeam';

	$banner_title = '';
	$banner_content = '';
	$banner_image = '/content/image/Photo1.jpg';

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
		<div class="col-sm">
			<img class="navbar-brand" src="documnent_root/content/image/misbah.png" alt="misbah" width="100%" style="border-radius: 25%;">
			<h2>Misbah </h2>
			<p>Computer Scientist by training, marketer by experience, teacher as a hobby but social entrepreneur by motivation. Passionate about using the diverse skill set to help people reach their true potential.
			</p>
		</div>
		<div class="col-sm">
			<img class="navbar-brand" src="documnent_root/content/image/pedro.png" alt="pedro" width="100%" style="border-radius: 25%;">
			<h2>Pedro </h2>
			<p>Student nurse with a strong belief in giving everyone the opportunity to be themselves whilst understanding and embracing the physical and emotional changes brought by medical interventions.
			</p>
		</div>
		<div class="col-sm">
			<img class="navbar-brand" src="documnent_root/content/image/raluca.png" alt="raluca" width="100%" style="border-radius: 25%;">
			<h2>Raluca </h2>
			<p>Passionate student nurse driven to make a positive difference to peoples lives. Determined to promote multidisciplinary working pathways to benefit both patients as well as professionals.
			</p>
		</div>
	</div>
</div>
</section>
<!-- Content 1 -->

	
	';
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';
?>