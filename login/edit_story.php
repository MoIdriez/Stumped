<?php
	$page_title = 'Edit a Story';
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = '';
	$banner_content = '';
	$banner_image = '';

	$content = '
<!-- content -->
<section>
	<h2>Edit a Story</h2>
	<form action="#.php" method="post">
		<div class="container">
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="NAME"><h4 class="title_form">NAME*</h4></label>
					<input type="text" class="form-control" id="NAME">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="TITLE"><h4 class="title_form">TITLE*</h4></label>
					<input type="text" class="form-control" id="TITLE">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="QUOTE"><h4 class="title_form">QUOTE*</h4></label>
					<textarea class="form-control" id="QUOTE" rows="5"></textarea>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="STORY"><h4 class="title_form">STORY*</h4></label>
					<textarea class="form-control" id="STORY" rows="15"></textarea>
				</div>
			</div>
		</div>
			<button type="submit" class="btn btn-primary" id="all-button">
				<h5 class="title_form">Edit Story</h5>
			</button>
	</form>
</section>
<!-- content -->
';
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';


?>