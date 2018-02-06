<?php
	$page_title = 'Add a Story';
	$page_css = '
	<link rel="stylesheet" href="/stumped-final/scripts/css/bootstrap-datetimepicker.min.css">
	';
	$page_js = '
	<script src="/stumped-final/scripts/js/moment.js"></script>
	<script src="/stumped-final/scripts/js/bootstrap-datetimepicker.js"></script>
	<script src="/stumped-final/scripts/js/datetimepicker.js"></script>';

	$header_main = '';
	$header_sub = '';

	$banner_title = '';
	$banner_content = '';
	$banner_image = '';

	$usertype = '1';

	$content = '
<!-- content -->
<section>
	<h2>Add a Story</h2>
	<form id="eventForm" action="scripts/add_event.php" method="post">
		<div class="container">
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="USERTYPEID"><h4 class="title_form">USERTYPEID (2 for professional - 3 for patient)*</h4></label>
					<input type="text" class="form-control" name="USERTYPEID" id="USERTYPEID">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="NAME"><h4 class="title_form">NAME*</h4></label>
					<input type="text" class="form-control" name="NAME" id="NAME">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="STARTTIME"><h4 class="title_form">STARTTIME*</h4></label>
					<div class="input-group date" id="timeStart" name="timeStart">
						<input type="text" class="form-control" id="STARTTIME" name="STARTTIME"/>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="ENDTIME"><h4 class="title_form">ENDTIME*</h4></label>
					<div class="input-group date" id="timeEnd" name="timeEnd">
						<input type="text" class="form-control" id="ENDTIME" name="ENDTIME"/>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="LOCATION"><h4 class="title_form">LOCATION*</h4></label>
					<input type="text" class="form-control" name="LOCATION" id="LOCATION">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="LOCATIONLINK"><h4 class="title_form">LOCATIONLINK*</h4></label>
					<input type="text" class="form-control" name="LOCATIONLINK" id="LOCATIONLINK">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="DESCRIPTION"><h4 class="title_form">DESCRIPTION*</h4></label>
					<input type="text" class="form-control" name="DESCRIPTION" id="DESCRIPTION">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="LINK"><h4 class="title_form">LINK*</h4></label>
					<input type="text" class="form-control" name="LINK" id="LINK">
				</div>
			</div>
		</div>
			<button type="submit" class="btn btn-primary" id="all-button">
				<h5 class="title_form">Add Story</h5>
			</button>
	</form>
</section>
<!-- content -->
';
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';


?>