<?php
	$page_title = 'New User Registration';
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
		<h2>Registration Form</h2>
		<form action="#.php" method="post">
			<div class="container">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="email"><h4 class="title_form">Email*</h4></label>
						<input type="email" class="form-control" id="email" placeholder="for example: abc@gmail.com">
					</div>
					<div class="form-group col-md-6">
						<label for="user_type"><h4 class="title_form">User Type*</h4></label>
							<select class="form-control" id="user_type">
								<option>Healthcare Professional</option>
								<option>Admin</option>
							</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="password"><h4 class="title_form">Password*</h4></label>
						<input type="password" class="form-control" placeholder="Password" name="password" id="password" required></h3>
					</div>
					<div class="form-group col-md-6">
						<label for="password"><h4 class="title_form">Confirm password*</h4></label>
						<input type="password" class="form-control" placeholder="Password" name="password" id="password" required></h3>
					</div>
				</div>
			</div>
				<button type="submit" class="btn btn-primary" id="all-button">
					<h5 class="title_form">Register</h5>
				</button>
		</form>
	</section>
	<!-- content -->
	';
	include $_SERVER['DOCUMENT_ROOT'] . '/stumped-final/scripts/php/layout/master.php';


?>