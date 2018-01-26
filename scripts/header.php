<!-- for this file to work we are assuming the following variables

	mainHeader =  the name of the current header which could be any of the following
		home, forYou, stories, professionals, aboutUs
	is set to '<span class="sr-only"></span>'
	
	subHeader = the name of the current secondary header which could be any of the following
		forYouServices, forYouPrevention, forYouPreOp, forYouPostOp, forYouAtHome, forYouPeerSupport, forYouPatient, forYouFAQ,
		storiesList, storiesYour,
		professionalServices, professionalEvents, professionalResources,
		aboutUsMission, aboutUsMilestones, aboutUsTestimonials, aboutUsTeam, aboutUsContact
<!-- Navigation Bar -->
<?php
	setupHeader("home", "");
	function setupHeader($mainHeader, $subHeader) {
		mainHeader($mainHeader);
		if (strpos($subHeader, 'forYou') !== false) {
			forYouHeader($subHeader);
		} else if (strpos($subHeader, 'stories') !== false) {
			storiesHeader($subHeader);
		} else if (strpos($subHeader, 'professional') !== false) {
			professionalHeader($subHeader);
		} else if (strpos($subHeader, 'aboutUs') !== false) {
			aboutUsHeader($subHeader);
		}
	}
	
	function isHeader($mainHeader, $hdr) {
		return $mainHeader == $hdr ? '<span class="sr-only"></span>' : '';
	}

	function isHeaderActive($mainHeader, $hdr) {
		return $mainHeader == $hdr ? 'active' : '';
	}

	function isSubHeader($subHeader, $shdr) {
		return $subHeader == $shdr ? 'currentSubHeader' : '';
	}
	
	function logo() {
		echo 	'
				<a class="navbar-brand" href="home.html" title="Stumped!"><img src="image/stumped_logo.png"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				';
	}
	
	function mainHeader($mainHeader) {
		echo	'
				<nav class="navbar navbar-expand-lg navbar-light">
				' .
				logo() .
				'
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item ' . isHeaderActive($mainHeader, 'home') . ' ">
							<a class="nav-link" href="home.html">Home</a>
						</li>
						<li class="nav-item dropdown ' . isHeaderActive($mainHeader, 'forYou') . ' ">
							<a class="nav-link dropdown-toggle" href="faqs.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">For You</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="services.html">Services </a>
									<a class="dropdown-item" href="prevent.html">Prevention </a>
									<a class="dropdown-item" href="pre-op.html">Pre Op </a>
									<a class="dropdown-item" href="post-op.html">Post Op </a>
									<a class="dropdown-item" href="at-home.html">At Home </a>
									<a class="dropdown-item" href="peer-support.html">Peer Support </a>
									<a class="dropdown-item" href="event-amputee.html">Event </a>
									<a class="dropdown-item" href="faqs.html">FAQs </a>
								</div>
						</li>
						<li class="nav-item dropdown ' . isHeaderActive($mainHeader, 'stories') . ' ">
							<a class="nav-link dropdown-toggle" href="story-list.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Stories</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="story-list.html">Story List </a>
									<a class="dropdown-item" href="story.html">Your Story </a>
								</div>
						</li>
						<li class="nav-item dropdown ' . isHeaderActive($mainHeader, 'professionals') . ' ">
							<a class="nav-link dropdown-toggle" href="servicepro.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">For Healthcare Professional</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="servicepro.html">Find Services </a>
									<a class="dropdown-item" href="event-pro.html">Events </a>
									<a class="dropdown-item" href="resource-index.html">Resources Index </a>
									<a class="dropdown-item" href="contactpro.html">Get in Touch </a>
								</div>
						</li>
						<li class="nav-item dropdown ' . isHeaderActive($mainHeader, 'aboutUs') . ' ">
							<a class="nav-link dropdown-toggle" href="company.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About us</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="company.html">Mission & Vission </a>
									<a class="dropdown-item" href="milestones.html">Milestones</a>
									<a class="dropdown-item" href="testimonials.html">Testimonials</a>
									<a class="dropdown-item" href="team.html">Team </a>
									<a class="dropdown-item" href="contact.html">Contact us</a>						
								</div>
						</li>
					</ul>
				</div>' .
				
				'
				</nav>
				';
		
	}
	
	//forYouServices, forYouPrevention, forYouPreOp, forYouPostOp, forYouAtHome, forYouPeerSupport, forYouPatient, forYouFAQ,
	function forYouHeader($subHeader) {
		echo 	'
				<div class="container">
					<div class="row">
						<div class="col-sm">
							<h5  style="text-align:center;"><a href="services.html" class="title ' . isSubHeader($subHeader, 'forYouServices') . ' ">Services</a></h5>
						</div>
						<div class="col-sm">
							<h5  style="text-align:center;"><a href="prevent.html" class="title ' . isSubHeader($subHeader, 'forYouPrevention') . ' ">Prevention </a></h5>
						</div>
						<div class="col-sm">
							<h5  style="text-align:center;"><a href="pre-op.html" class="title ' . isSubHeader($subHeader, 'forYouPreOp') . ' ">Pre Op </a></h5>
						</div>
						<div class="col-sm">
							<h5  style="text-align:center;"><a href="post-op.html" class="title ' . isSubHeader($subHeader, 'forYouPostOp') . ' ">Post Op </a></h5>
						</div>
						<div class="col-sm">
							<h5  style="text-align:center;"><a href="at-home.html" class="title ' . isSubHeader($subHeader, 'forYouAtHome') . ' ">At Home </a></h5>
						</div>
						<div class="col-sm">
							<h5  style="text-align:center;"><a href="peer-support.html" class="title ' . isSubHeader($subHeader, 'forYouPeerSupport') . ' ">Peer Support </a></h5>
						</div>
						<div class="col-sm">
							<h5  style="text-align:center;"><a href="event-amputee.html" class="title ' . isSubHeader($subHeader, 'forYouPatient') . ' ">Event for Patient </a></h5>
						</div>
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="faqs.html" class="title ' . isSubHeader($subHeader, 'forYouFAQ') . ' ">FAQs </a></h5>
						</div>
					</div>
				</div>
				';
	}
	
	//storiesList, storiesYour,
	function storiesHeader($subHeader) {
		echo	'
				<div class="container">
					<div class="row">
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="story-list.html" class="title ' . isSubHeader($subHeader, 'storiesList') . ' ">Story List</a></h5>
						</div>
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="story.html" class="title ' . isSubHeader($subHeader, 'storiesYour') . ' ">Your Story </a></h5>
						</div>
					</div>
				</div>
				';
	}
	
	//professionalServices, professionalEvents, professionalResources,
	function professionalHeader($subHeader) {
		echo	'
				<div class="container">
					<div class="row">
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="servicepro.html" class="title ' . isSubHeader($subHeader, 'professionalServices') . ' ">Find Services</a></h5>
						</div>
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="event-pro.html" class="title ' . isSubHeader($subHeader, 'professionalEvents') . ' ">Events </a></h5>
						</div>
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="resource-index.html" class="title ' . isSubHeader($subHeader, 'professionalResources') . ' ">Resources Index </a></h5>
						</div>
					</div>
				</div>
				';
	}
	
	//aboutUsMission, aboutUsMilestones, aboutUsTestimonials, aboutUsTeam, aboutUsContact
	function aboutUsHeader($subHeader) {
		echo	'
				<div class="container">
					<div class="row">
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="company.html" class="title ' . isSubHeader($subHeader, 'aboutUsMission') . ' ">Mission &amp; Vission </a></h5>
						</div>
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="milestones.html" class="title ' . isSubHeader($subHeader, 'aboutUsMilestones') . ' ">Milestones </a></h5>
						</div>
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="testimonials.html" class="title ' . isSubHeader($subHeader, 'aboutUsTestimonials') . ' ">Testimonials </a></h5>
						</div>
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="team.html" class="title ' . isSubHeader($subHeader, 'aboutUsTeam') . ' ">Team</a></h5>
						</div>
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="contact.html" class="title ' . isSubHeader($subHeader, 'aboutUsContact') . ' ">Contact Us </a></h5>
						</div>
					</div>
				</div>
				';
	}
?>