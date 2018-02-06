<?php
	$page_title = 'Add an Event';
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = '';
	$banner_content = '';
	$banner_image = '';

	$content = '
<!-- Content 2 -->
<form id="storiesForm" novalidate>
<div class="container">
	<div class="form-row">
		<label for="USERTYPEID"><h4 class="title_form">USER TYPE ID</h4></label>
		<select class="form-control" id="user_type">
			<option>1. Admin</option>
			<option>2. Healthcare Professional</option>
		</select>
	</div>
	<div class="form-row">
		<label for="NAME"><h4 class="title_form">NAME</h4></label>
		<input type="text" class="form-control" id="NAME">
	</div>
	<div class="form-row">
		<label for="STARTTIME"><h4 class="title_form">START TIME</h4></label>
		<input type="date" class="form-control" id="STARTTIME">
	</div>
	<div class="form-row">
		<label for="ENDTIME"><h4 class="title_form">END TIME</h4></label>
		<input type="date" class="form-control" id="ENDTIME">
	</div>
	<div class="form-row">
		<label for="LOCATION"><h4 class="title_form">LOCATION</h4></label>
		<input type="text" class="form-control" id="LOCATION">
	</div>
	<div class="form-row">
		<label for="LOCATIONLINK"><h4 class="title_form">LOCATION LINK</h4></label>
		<input type="text" class="form-control" id="LOCATIONLINK">
	</div>
	<div class="form-row">
		<label for="DESCRIPTION"><h4 class="title_form">DESCRIPTION</h4></label>
		<input type="text" class="form-control" id="DESCRIPTION">
	</div>
	<div class="form-row">
		<label for="LINK"><h4 class="title_form">LINK</h4></label>
		<input type="text" class="form-control" id="LINK">
	</div>
	<br>
	<button type="submit" class="btn btn-primary" id="all-button"><h5 style="title_form">Save a new event</h5></button>
</form>
</div>
<!-- Content 2 -->
	';
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';


?>