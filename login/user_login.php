<?php
	$page_title = 'User Login';
	$page_css = '';
	$page_js = '';

	$header_main = '';
	$header_sub = '';

	$banner_title = '';
	$banner_content = '';
	$banner_image = '';

	$usertype = '';

	$content = '
		<!-- content -->
		<section>
			<h2>User Login</h2>
			<form id="loginForm" action="document_root/scripts/php/user/login.php" novalidate method="post">
				<div class="container">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="email"><h4 class="title_form">Email*</h4></label>
							<input type="email" class="form-control" name="email" id="email" placeholder="for example: abc@gmail.com" required>
							<div class="invalid-feedback" id="emailValidator">Please enter a valid email</div>
						</div>
						<div class="form-group col-md-6">
							<label for="password"><h4 class="title_form">Password*</h4></label>
							<input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
							<div class="invalid-feedback" id="passwordValidator">Please enter an email</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary" id="all-button">
						<h5 class="title_form">Login</h5>
					</button>
				</div>
			</form>
		</section>
		<!-- content -->
	';
	include $_SERVER['DOCUMENT_ROOT'] . '/scripts/php/layout/master.php';


?>