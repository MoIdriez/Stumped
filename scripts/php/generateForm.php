<?php

	function generateForm($title, $type, $action) {
		return '
			<!-- Intro -->
			<section>
				<h1>' . $title . '</h1>
			</section>
			<!-- Intro -->

			<!-- Content 1 -->
			<form id="contactForm" novalidate method="post" action="' . $action . '">
			<div class="container">
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="title"><h4>Title</h4></label>
						<input type="text" class="form-control" name="title" id="title" placeholder="Title">
					</div>
					<div class="form-group col-md-4">
						<label for="firstname"><h4>First name<span>*</span></h4></h4></label>
						<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name" required>
						<div class="invalid-feedback" id="firstnameValidator"> Please insert your first name </div>
					</div>
					<div class="form-group col-md-4">
						<label for="lastname"><h4>Last name</h4></label>
						<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name">
						<div class="invalid-feedback" id="lastnameValidator"> Please insert your last name </div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="iam"><h4>I am a</h4></label>
							<select class="form-control" name="usertype" id="iam">
								<option value="patient">Patient</option>
								<option value="professional">Healthcare Professional</option>
								<option value="other">Other</option>
							</select>
					</div>
					<div class="form-group col-md-6">
						<label for="amputation"><h4>Level of Amputation</h4></label>
							<select class="form-control" name="amputation" id="amputation">
								<option value="Right through hip">Right through hip</option>
								<option value="Right above knee (RAK)">Right above knee (RAK)</option>
								<option value="Right through knee (RTK)">Right through knee (RTK)</option>
								<option value="Right below knee (RBK)">Right below knee (RBK)</option>
								<option value="Right ankle/partial foot">Right ankle/partial foot</option>
								<option value="Left through hip">Left through hip</option>
								<option value="Left above knee (LAK)">Left above knee (LAK)</option>
								<option value="Left through knee (LTK)">Left through knee (LTK)</option>
								<option value="Left below knee (LBK)">Left below knee (LBK)</option>
								<option value="Left ankle/partial foot">Left ankle/partial foot</option>
								<option value="Right through shoulder">Right through shoulder</option>
								<option value="Right above elbow (RAE)">Right above elbow (RAE)</option>
								<option value="Right below elbow (RBE)">Right below elbow (RBE)</option>
								<option value="Right wrist/partial hand">Right wrist/partial hand</option>
								<option value="Left through shoulder">Left through shoulder</option>
								<option value="Left above elbow (LAE)">Left above elbow (LAE)</option>
								<option value="Left below elbow (LBE)">Left below elbow (LBE)</option>
								<option value="Left wrist/partial hand">Left wrist/partial hand</option>
							</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="gender"><h4>Gender</h4></label>
							<select class="form-control" name="gender" id="gender">
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
					</div>
					<div class="form-group col-md-6">
						<label for="age"><h4>Age Group</h4></label>
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
						<label for="email-address"><h4>Email address<span>*</span></h4></h4></label>
						<input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
					</div>
					<div class="form-group col-md-6">
						<label for="phone-number"><h4>Phone number</h4></label>
						<input type="text" class="form-control" name="phone" id="phone" placeholder="0741*******">
					</div>
				</div>
				<div class="form-row">
					<label for="subject"><h4>Subject<span>*</span></h4></label>
					<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
					<div class="invalid-feedback" id="subjectValidator"> Please write your Subject</div>
				</div>
				<div class="form-row">
					<label for="message"><h4 style="margin-top:15px;">Your ' . $type . '<span>*</span></h4></label>
					<textarea class="form-control" name="message" id="message" rows="7" placeholder="Your ' . $type . '" required></textarea>
					<div class="invalid-feedback" id="messageValidator"> Please write your ' . $type . '</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary submitButton"><h5>Send ' . $type . '</h5></button>
			</form>
			</div>
			<!-- Content 1 -->
	
	
	
	';
		
		
	}



?>