<!-- for this file to work we are assuming the following variables

	mainHeader =  the name of the current header which could be any of the following
		forYou, stories, professional, aboutUs
	is set to '<span class="sr-only"></span>'
	
	subHeader = the name of the current secondary header which could be any of the following
		forYouServices, forYouPrevention, forYouPreOp, forYouPostOp, forYouAtHome, forYouPeerSupport, forYouPatient, forYouFAQ,
		storiesList, storiesYour,
		professionalServices, professionalEvents, professionalResources,
		aboutUsTeam, aboutUsMilestones, aboutUsContact
<!-- Navigation Bar -->
<?php
	
	function setupHeader($document_root, $mainHeader, $subHeader) {
		mainHeader($document_root, $mainHeader);
		if (strpos($subHeader, 'forYou') !== false) {
			forYouHeader($document_root, $subHeader);
		} else if (strpos($subHeader, 'stories') !== false) {
			storiesHeader($document_root, $subHeader);
		} else if (strpos($subHeader, 'professional') !== false) {
			professionalHeader($document_root, $subHeader);
		} else if (strpos($subHeader, 'aboutUs') !== false) {
			aboutUsHeader($document_root, $subHeader);
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
	
	function logo($document_root) {
		return 	'
				<a class="navbar-brand" href="' . $document_root . '/home.php" title="Stumped!"><img src="/stumped-final/content/image/stumped_logo.png"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				';
	}
	
	function mainHeader($document_root, $mainHeader) {
		echo	'
				<nav class="navbar navbar-expand-lg navbar-light">
				' .
				logo($document_root) .
				'
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown ' . isHeaderActive($mainHeader, 'forYou') . ' ">
							<a class="nav-link dropdown-toggle" href="' . $document_root . '/forYou/faqs.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">For You</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="' . $document_root . '/forYou/services.php">Services </a>
									<a class="dropdown-item" href="' . $document_root . '/forYou/prevent.php">Prevention </a>
									<a class="dropdown-item" href="' . $document_root . '/forYou/pre-op.php">Pre Op </a>
									<a class="dropdown-item" href="' . $document_root . '/forYou/post-op.php">Post Op </a>
									<a class="dropdown-item" href="' . $document_root . '/forYou/at-home.php">At Home </a>
									<a class="dropdown-item" href="' . $document_root . '/forYou/peer-support.php">Peer Support </a>
									<a class="dropdown-item" href="' . $document_root . '/forYou/faqs.php">FAQs </a>
								</div>
						</li>
						<li class="nav-item dropdown ' . isHeaderActive($mainHeader, 'stories') . ' ">
							<a class="nav-link dropdown-toggle" href="' . $document_root . '/stories/story-list.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Stories</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="' . $document_root . '/stories/story-list.php">Story List </a>
									<a class="dropdown-item" href="' . $document_root . '/stories/story.php">Your Story </a>
								</div>
						</li>
						<li class="nav-item dropdown ' . isHeaderActive($mainHeader, 'professional') . ' ">
							<a class="nav-link dropdown-toggle" href="' . $document_root . '/professional/servicepro.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">For Healthcare Professional</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="' . $document_root . '/professional/servicepro.php">Find Services </a>
									<a class="dropdown-item" href="' . $document_root . '/professional/event-pro.php">Events </a>
									<a class="dropdown-item" href="' . $document_root . '/professional/resource-index.php">Resources Index </a>
								</div>
						</li>
						<li class="nav-item dropdown ' . isHeaderActive($mainHeader, 'aboutUs') . ' ">
							<a class="nav-link dropdown-toggle" href="' . $document_root . '/aboutUs/team.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About us</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="' . $document_root . '/aboutUs/team.php">Team </a>
									<a class="dropdown-item" href="' . $document_root . '/aboutUs/milestones.php">Milestones</a>
									<a class="dropdown-item" href="' . $document_root . '/aboutUs/contact.php">Contact us</a>						
								</div>
						</li>
					</ul>
				</div>' .
				
				'
				</nav>
				';
		
	}
	
	//forYouServices, forYouPrevention, forYouPreOp, forYouPostOp, forYouAtHome, forYouPeerSupport, forYouPatient, forYouFAQ,
	function forYouHeader($document_root, $subHeader) {
		echo 	'
				<div class="container">
					<div class="row">
						<div class="col-sm">
							<h5  style="text-align:center;"><a href="' . $document_root . '/forYou/services.php" class="title ' . isSubHeader($subHeader, 'forYouServices') . ' ">Services</a></h5>
						</div>
						<div class="col-sm">
							<h5  style="text-align:center;"><a href="' . $document_root . '/forYou/prevent.php" class="title ' . isSubHeader($subHeader, 'forYouPrevention') . ' ">Prevention </a></h5>
						</div>
						<div class="col-sm">
							<h5  style="text-align:center;"><a href="' . $document_root . '/forYou/pre-op.php" class="title ' . isSubHeader($subHeader, 'forYouPreOp') . ' ">Pre Op </a></h5>
						</div>
						<div class="col-sm">
							<h5  style="text-align:center;"><a href="' . $document_root . '/forYou/post-op.php" class="title ' . isSubHeader($subHeader, 'forYouPostOp') . ' ">Post Op </a></h5>
						</div>
						<div class="col-sm">
							<h5  style="text-align:center;"><a href="' . $document_root . '/forYou/at-home.php" class="title ' . isSubHeader($subHeader, 'forYouAtHome') . ' ">At Home </a></h5>
						</div>
						<div class="col-sm">
							<h5  style="text-align:center;"><a href="' . $document_root . '/forYou/peer-support.php" class="title ' . isSubHeader($subHeader, 'forYouPeerSupport') . ' ">Peer Support </a></h5>
						</div>
						<div class="col-sm">
							<h5  style="text-align:center;"><a href="' . $document_root . '/forYou/event-amputee.php" class="title ' . isSubHeader($subHeader, 'forYouPatient') . ' ">Event for Patient </a></h5>
						</div>
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="' . $document_root . '/forYou/faqs.php" class="title ' . isSubHeader($subHeader, 'forYouFAQ') . ' ">FAQs </a></h5>
						</div>
					</div>
				</div>
				';
	}
	
	//storiesList, storiesYour,
	function storiesHeader($document_root, $subHeader) {
		echo	'
				<div class="container">
					<div class="row">
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="' . $document_root . '/stories/story-list.php" class="title ' . isSubHeader($subHeader, 'storiesList') . ' ">Story List</a></h5>
						</div>
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="' . $document_root . '/stories/story.php" class="title ' . isSubHeader($subHeader, 'storiesYour') . ' ">Your Story </a></h5>
						</div>
					</div>
				</div>
				';
	}
	
	//professionalServices, professionalEvents, professionalResources,
	function professionalHeader($document_root, $subHeader) {
		echo	'
				<div class="container">
					<div class="row">
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="' . $document_root . '/professional/servicepro.php" class="title ' . isSubHeader($subHeader, 'professionalServices') . ' ">Find Services</a></h5>
						</div>
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="' . $document_root . '/professional/event-pro.php" class="title ' . isSubHeader($subHeader, 'professionalEvents') . ' ">Events </a></h5>
						</div>
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="' . $document_root . '/professional/resource-index.php" class="title ' . isSubHeader($subHeader, 'professionalResources') . ' ">Resources Index </a></h5>
						</div>
					</div>
				</div>
				';
	}
	
	//aboutUsTeam, aboutUsMilestones, aboutUsContact
	function aboutUsHeader($document_root, $subHeader) {
		echo	'
				<div class="container">
					<div class="row">
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="' . $document_root . '/aboutUs/team.php" class="title ' . isSubHeader($subHeader, 'aboutUsTeam') . ' ">Meet the team </a></h5>
						</div>
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="' . $document_root . '/aboutUs/milestones.php" class="title ' . isSubHeader($subHeader, 'aboutUsMilestones') . ' ">Milestones </a></h5>
						</div>
						<div class="col-sm">
							<h5 style="text-align:center;"><a href="' . $document_root . '/aboutUs/contact.php" class="title ' . isSubHeader($subHeader, 'aboutUsContact') . ' ">Contact Us </a></h5>
						</div>
					</div>
				</div>
				';
	}
?>