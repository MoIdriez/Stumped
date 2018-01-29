<?php
	$page_title = 'Your Story Page';
	$page_css = '';
	$page_js = '';

	$header_main = 'stories';
	$header_sub = 'storiesYour';

	$banner_title = '';
	$banner_content = '';
	$banner_image = '/content/image/Photo2.jpg';

	$content = '
	
	
	
	<!-- Intro -->
<section>
	<h1>Your Story</h1>
</section>
<!-- Intro -->

<!-- Content 1 -->
<form id="storiesForm" novalidate method="post" action="scripts/story.php">
<div class="container">
	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="title"><h4 style="margin-left:0px ;margin-right:0px;">Title</h4></label>
			<input type="text" class="form-control" name="title" id="title" placeholder="Title">
		</div>
		<div class="form-group col-md-4">
			<label for="firstname"><h4 style="margin-left:0px ;margin-right:0px;">First name</h4></label>
			<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name" required>
			<div class="invalid-feedback" id="firstnameValidator"> Please insert your first name </div>
		</div>
		<div class="form-group col-md-4">
			<label for="lastname"><h4 style="margin-left:0px ;margin-right:0px;">Last name</h4></label>
			<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name" required>
			<div class="invalid-feedback" id="lastnameValidator"> Please insert your last name </div>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="iam"><h4 style="margin-left:0px ;margin-right:0px;">I am</h4></label>
			    <select class="form-control" name="usertype" id="iam">
					<option value="patient">Patient</option>
					<option value="professional">Healthcare Professional</option>
					<option value="other">Other</option>
				</select>
		</div>
		<div class="form-group col-md-4">
			<label for="gender"><h4 style="margin-left:0px ;margin-right:0px;">Gender</h4></label>
				<select class="form-control" name="gender" id="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
		</div>
		<div class="form-group col-md-4">
			<label for="age"><h4 style="margin-left:0px ;margin-right:0px;">Age Group</h4></label>
				<select class="form-control" name="age" id="age">
					<option value="younger than 20 years old">younger than 20 years old</option>
					<option value="20-29 years old">20-29 years old</option>
					<option value="30-39 years old">30-39 years old</option>
					<option value="40-49 years old">40-49 years old</option>
					<option value="50-59 years ">50-59 years old</option>
					<option value="60 years old or over">60 years old or over</option>
				</select>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="email-address"><h4 style="margin-left:0px ;margin-right:0px;">Email address</h4></label>
			<input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
		</div>
		<div class="form-group col-md-6">
			<label for="phone-number"><h4 style="margin-left:0px ;margin-right:0px;">Phone number</h4></label>
			<input type="text" class="form-control" name="phone" id="phone" placeholder="0741*******">
		</div>
	</div>
	<div class="form-row">
		<label for="subject"><h4>Subject</h4></label>
		<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
	</div>
	<div class="form-row">
		<label for="story"><h4 style="margin-top:15px; margin-left:0px ;margin-right:0px;">Your Story</h4></label>
		<textarea class="form-control" name="story" id="story" rows="7" placeholder="Your Story" required></textarea>
		<div class="invalid-feedback" id="messageValidator"> Please write your story </div>
	</div>
	<br>
	<button type="submit" class="btn btn-primary" style="background-color: rgb(244, 188, 51); color: black; border: 1px solid black; text-align: center;"><h5 style="margin-top:5px;">Send Story</h5></button>
</form>
</div>
<!-- Content 1 -->
	
	
	
	';
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';
?>
</body>
</html>