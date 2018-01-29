<?php

	function standard($title, $body, $contact, $icon) {
		return '
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm order-sm-1" id="main-icon">
						<i class="fa ' . $icon .  '"></i>
						' . $contact . '
					</div>
					<div class="col-sm order-sm-2" id="main-icon">
						<h2>' . $title . '</h2>
						' . $body . '
					</div>
				</div>
			</div>
		</section>
		';
	}
	
	function alternative($title, $body, $contact, $icon) {
		return '
		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm order-sm-1 order-2" id="main-icon">
						<h2>' . $title . '</h2>
						' . $body . '
					</div>
					<div class="col-sm order-sm-2 order-1" id="main-icon">
						<i class="fa ' . $icon .  '"></i>
						' . $contact . '
					</div>
				</div>
			</div>
		</section>
		
		';
	}

?>