<?php
	$page_title = 'Prevention';
	$page_css = '';
	$page_js = '';

	$header_main = 'forYou';
	$header_sub = 'forYouPrevention';

	$banner_title = 'Prevention';
	$banner_content = 'Here we look at the most common causes of amputations.   Most amputations are preventable, and this page will broaden your knowledge, understanding and offer you practical skills to manage your health and where possible, prevent amputations.';
	$banner_image = '/content/image/Photo1.jpg';

	$usertype = '';

	$content = '
	
<!-- Content 1 -->
<section>
<div class="container">
	<div class="row">
		<div class="col-sm" id="main-icon">
			<h2 id="diabetes">Diabetes</h2>
			<p>Left untreated, Diabetes is one of the leading causes to lower limb amputations. The development of complications can be prevented with foot care routines.</p>
		</div>
	</div>
</div>
</section>

<section>
<div class="container">
	<div class="row">
		<div class="col-sm" id="main-icon">
			<a href="document_root/forYou/prevention/self-help.php" class="title"><i class="fa fa-medkit"></i></a>
			<h3><a href="document_root/forYou/prevention/self-help.php" class="title">Self Help</a></h3>
			<p>Find information and practical steps to promote the health of your feet and prevent complication and potential amputation.</p>
		</div>
		<div class="col-sm" id="main-icon">
			<a href="document_root/forYou/prevention/service-oxford.php" class="title"><i class="fa fa-ambulance"></i></a>
			<h3><a href="document_root/forYou/prevention/service-oxford.php" class="title">Services(Oxfordshire)</a></h3>
			<p>Find the services you may come into contact whilst living with diabetes.</p>
		</div>
	</div>
</div>	
</section>
<!-- Content1 -->

<hr>

<!-- Content 2 -->
<section>
<div class="container">
	<div class="row">
		<div class="col-sm" id="main-icon">
			<h2 id="cancer">Cancer </h2>
			<p>You might need to have an amputation rather than limb sparing surgery if:
			<br>&#9679; the cancer has grown into the major nerves and blood vessels around your bone tumour
			<br>&#9679; you developed an infection after your limb sparing surgery that meant the false bone had to be removed
			<br>&#9679; the position of the tumour means that limb sparing surgery is not technically possible
			<br>&#9679; it is not possible to completely remove the cancer with limb sparing surgery
			</p>
		</div>
	</div>
</div>
</section>
<!-- Content 2 -->

<hr>

<!-- Content 3 -->
<section>
<div class="container">
	<div class="row">
		<div class="col-sm" id="main-icon">
			<h2>Septicemia </h2>
			<p>Sepsis is a preventable blood infection that can lead to multiple organ failure loss and ultimately death. When septicaemia causes damage to blood vessels, blood leaks out, causing the rash that does not fade under pressure. The rash can quickly develop into larger patches which look like fresh bruising. The body will try and maintain blood supply to the vital organs (brain, heart, lungs, liver and kidneys), but the blood supply is reduced to the extremities, such as the hands and feet and the surface of the skin. Without blood and oxygen reaching the skin and underlying tissues, the skin and tissues begin to die, leading to skin damage, loss of fingers and toes or amputation of limbs.</p>
		</div>
	</div>
</div>
</section>
<!-- Content 3 -->



<hr>

<!-- Content 3 -->
<section>
<div class="container">
	<div class="row">
		<div class="col-sm" id="main-icon">
			<h2>Peripheral Vascular Disease (PVD) </h2>
			<p>PVD is a type of vascular disease that is caused by narrowing of the arteries. The narrowing is due to build-up of fatty deposits of the arteries walls. PVD can affect any arteries (except the ones supplying the heart), however it is most likely to affect the arteries that supply the legs than the arms (British Heart Foundation, no date). PVD is another leading cause to amputation.</p>
		</div>
	</div>
</div>
</section>
<!-- Content 3 -->
	
	';
	include $_SERVER['DOCUMENT_ROOT'] . '/scripts/php/layout/master.php';
?>