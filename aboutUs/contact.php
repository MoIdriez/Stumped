<?php
	$page_title = 'Contact';
	$page_css = '';
	$page_js = '';

	$header_main = 'aboutUs';
	$header_sub = 'aboutUsContact';

	$banner_title = '';
	$banner_content = '';
	$banner_image = '';

	$page_js = '
	<script src="/stumped-final/scripts/js/map.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2-dk1ANjjHROY6WJ6Snbveyl9-CUuQlg"></script>
	';
	
	$content = '
	
	
<!-- Map Section -->
<div>
	<div id="map" style="width:100%;height:450px;"></div>
</div>
<!-- Map Section -->
 
<!-- Content 1 -->
<section id="address">
	<h3 style="text-align:center;">Address: Gipsy Lane, Oxford</h3>
	<h3 style="text-align:center;">Email:  info@stumped.org.uk</h3>
</section>
<!-- Content1 -->

<!-- Content 2 -->
<form id="storiesForm" novalidate>
<div class="container">
	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="firstname"><h4 style="margin-left:0px ;margin-right:0px;">Title</h4></label>
			<input type="text" class="form-control" id="firstname" placeholder="First name">
		</div>
		<div class="form-group col-md-4">
			<label for="firstname"><h4 style="margin-left:0px ;margin-right:0px;">First name</h4></label>
			<input type="text" class="form-control" id="firstname" placeholder="First name" required>
			<div class="invalid-feedback" id="firstnameValidator"> Please insert your first name </div>
		</div>
		<div class="form-group col-md-4">
			<label for="lastname"><h4 style="margin-left:0px ;margin-right:0px;">Last name</h4></label>
			<input type="text" class="form-control" id="lastname" placeholder="Last name" required>
			<div class="invalid-feedback" id="lastnameValidator"> Please insert your last name </div>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="iam"><h4 style="margin-left:0px ;margin-right:0px;">I am</h4></label>
			    <select class="form-control" id="iam">
					<option>Patient</option>
					<option>Healthcare Professional</option>
					<option>Other</option>
				</select>
		</div>
		<div class="form-group col-md-4">
			<label for="gender"><h4 style="margin-left:0px ;margin-right:0px;">Gender</h4></label>
				<select class="form-control" id="gender">
					<option>Male</option>
					<option>Female</option>
				</select>
		</div>
		<div class="form-group col-md-4">
			<label for="age"><h4 style="margin-left:0px ;margin-right:0px;">Age Group</h4></label>
			<select class="form-control" id="age">
				<option>younger than 20 years old</option>
				<option>20-29 years old</option>
				<option>30-39 years old</option>
				<option>40-49 years old</option>
				<option>50-59 years old</option>
				<option>60 years old or over</option>
			</select>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="email-address"><h4 style="margin-left:0px ;margin-right:0px;">Email address</h4></label>
			<input type="email" class="form-control" id="email" placeholder="name@example.com" required>
		</div>
		<div class="form-group col-md-6">
			<label for="phone-number"><h4 style="margin-left:0px ;margin-right:0px;">Phone number</h4></label>
			<input type="text" class="form-control" id="phone" placeholder="0741*******">
		</div>
	</div>
	<div class="form-row">
		<label for="subject"><h4>Subject</h4></label>
		<input type="text" class="form-control" id="subject" placeholder="Subject">
	</div>
	<div class="form-row">
		<label for="your-story"><h4 style="margin-top:15px; margin-left:0px ;margin-right:0px;">Your Message</h4></label>
		<textarea class="form-control" id="story" rows="7" placeholder="Your story" required></textarea>
		<div class="invalid-feedback" id="storyValidator"> Please write your message </div>
	</div>
	<br>
	<button type="submit" class="btn btn-primary" style="background-color: rgb(244, 188, 51); color: black; border: 1px solid black; text-align: center;"><h5 style="margin-top:5px;">send message</h5></button>
</form>
</div>
<!-- Content 2 -->
	
	';
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';
?>