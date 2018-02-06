<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/db/mysqlifunction.php';
	
	$page_title = 'Contact Form';
	
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = 'Contact Form';
	$banner_content = '';
	$banner_image = '';

	$content = '
<!-- Content -->
<section>
<form id="storiesForm" action="add_contact.php" method="post">
	<div class="container">
		<div class="form-row">
			<label for="TITLE"><h4 class="title_form">TITLE</h4></label>
			<input type="text" class="form-control" name="TITLE">
		</div>
		
		<div class="form-row">
			<label for="FIRSTNAME"><h4 class="title_form">FIRSTNAME</h4></label>
			<input type="text" class="form-control" name="FIRSTNAME">
		</div>
	
		<div class="form-row">
			<label for="LASTNAME"><h4 class="title_form">LASTNAME</h4></label>
			<input type="text" class="form-control" name="LASTNAME">
		</div>
				
		<div class="form-row">
			<label for="USERTYPE"><h4 class="title_form">USERTYPE</h4></label>
				<select class="form-control" id="USERTYPE" name="USERTYPE">
					<option>Admin</option>
					<option>Healthcare Professional</option>
				</select>
		</div>
		
		<div class="form-row">
			<label for="AMPUTATION"><h4 class="title_form">AMPUTATION</h4></label>
			<input type="text" class="form-control" name="AMPUTATION">
		</div>

		<div class="form-row">
			<label for="GENDER"><h4 class="title_form">GENDER</h4></label>
				<select class="form-control" id="GENDER" name="GENDER">
					<option>Male</option>
					<option>Female</option>
				</select>
		</div>
	
		<div class="form-row">
			<label for="AGEGROUP"><h4 class="title_form">AGEGROUP</h4></label>
				<select class="form-control" id="AGEGROUP" name="AGEGROUP">
					<option>younger than 20 years old</option>
					<option>20-29 years old</option>
					<option>30-39 years old</option>
					<option>40-49 years old</option>
					<option>50-59 years old</option>
					<option>60 years old or over</option>
				</select>
		</div>
		
		<div class="form-row">
			<label for="EMAIL"><h4 class="title_form">EMAIL</h4></label>
			<input type="text" class="form-control" name="EMAIL">
		</div>
		
		<div class="form-row">
			<label for="PHONENUMBER"><h4 class="title_form">PHONENUMBER</h4></label>
			<input type="text" class="form-control" name="PHONENUMBER">
		</div>
	
		<div class="form-row">
			<label for="SUBJECT"><h4 class="title_form">SUBJECT</h4></label>
			<input type="text" class="form-control" name="SUBJECT">
		</div>
		
		<div class="form-row">
			<label for="MESSAGE"><h4 class="title_form">MESSAGE</h4></label>
			<input type="text" class="form-control" name="MESSAGE">
		</div>
				
		<button type="submit" class="btn btn-primary" id="all-button"><h5 style="margin-top:10px;">Submit</h5></button>
		
	</form>
</div>
</section>
<!-- Content -->
		';
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';		
?>