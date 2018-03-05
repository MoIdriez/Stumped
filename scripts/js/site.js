$(document).ready(function () {
	
	if (/[?&]r=/.test(location.search)) {
		$('#modalCentered').modal('show')
		if(window.location.search.replace('?r=', '') == 'success') {
			$(".modal-body").html("Thank you, your message was successfully received by us.");
		} else {
			$(".modal-body").html("Your message failed could you please try again or contact us.");
		}
		window.history.replaceState({}, document.title, location.protocol + "//" + location.host + location.pathname);
	}
	
	if (/[?&]u=/.test(location.search)) {
		$('#modalCentered').modal('show')
		if(window.location.search.replace('?u=', '') == 'success') {
			$(".modal-body").html("Thank you, our team will verify your account shortly.");
		} else {
			$(".modal-body").html("Your request has failed, perhaps you have already signed up. Please try again or contact us.");
		}
		window.history.replaceState({}, document.title, location.protocol + "//" + location.host + location.pathname);
	}
	
	if (/[?&]l=/.test(location.search)) {
		$('#modalCentered').modal('show')
		if(window.location.search.replace('?l=', '') == 'success') {
			$(".modal-body").html("Thank you, you are logged in now.");
		} else {
			$(".modal-body").html("Login attempt has failed.");
		}
		window.history.replaceState({}, document.title, location.protocol + "//" + location.host + location.pathname);
	}
	
	if (/[?&]p=/.test(location.search)) {
		$('#modalCentered').modal('show')
		if(window.location.search.replace('?p=', '') == 'failed') {
			$(".modal-body").html('Access to that page is prohibited, please <a href="/login/user_login.php">login</a> first.');
		}
		window.history.replaceState({}, document.title, location.protocol + "//" + location.host + location.pathname);
	}
	
	if (/[?&]op=/.test(location.search)) {
		$('#modalCentered').modal('show')
		if(window.location.search.replace('?op=', '') == 'success') {
			$(".modal-body").html("Operation completed succesfully.");
		} else {
			$(".modal-body").html("Operation failed");
		}
		window.history.replaceState({}, document.title, location.protocol + "//" + location.host + location.pathname);
	}
	/*
	evnnt = event
	e = element
	evl = elementValidator
	min = minimum length
	max = maximum length
	message = error message displayed
	*/
	function validateText(evnt, e, evl,  min, max, message) {
		if(e.val().length < min || e.val().length > max){
			evnt.preventDefault();
			evnt.stopPropagation();
			e.addClass("is-invalid");
			e[0].setCustomValidity("zzz");
			evl.html(message);
		} else {
			e.removeClass("is-invalid");
			e[0].setCustomValidity("");
			evl.html("");
		}
	}
	function validateEquality(evnt, e, e2, e2vl, message) {
		if(e.val() !== e2.val()){
			evnt.preventDefault();
			evnt.stopPropagation();
			e2.addClass("is-invalid");
			e2[0].setCustomValidity("zzz");
			e2vl.html(message);
		} else {
			e2.removeClass("is-invalid");
			e2[0].setCustomValidity("");
			e2vl.html("");
		}
	}
	$("#iam").change(function () {
		if ($("#iam").val() === "patient") {
			$("#amputation").parent().show();
		} else {
			$("#amputation").parent().hide();
		}
	});
	
	$("#contactForm").on('submit', function(event){
		validateText(event, $("#firstname"), $("#firstnameValidator"), 2, 50, "Please input your first name");
		validateText(event, $("#subject"), $("#subjectValidator"), 2, 225, "Please input your subject");
		validateText(event, $("#message"), $("#messageValidator"), 2, 10000, "Please input your message");
		validateText(event, $("#emai"), $("#emailValidator"), 2, 10000, "Please input your emai");
		
		if($("contactForm")[0].checkValidity() == false){
			event.preventDefault();
			event.stopPropagation();
		}
		
		$("#contactForm").addClass("was-validated");
	});
	
	$("#registrationForm").on('submit', function(event){
		validateText(event, $("#email"), $("#emailValidator"), 2, 50, "Please enter a valid email");
		validateEquality(event, $("#password"), $("#password2"), $("#passwordValidator"), "Please make sure the passwords are similar");
		
		if($("#registrationForm")[0].checkValidity() == false){
			event.preventDefault();
			event.stopPropagation();
		}
		
		$("#registrationForm").addClass("was-validated");
	});
	
	$("#loginForm").on('submit', function(event){
		validateText(event, $("#email"), $("#emailValidator"), 2, 50, "Please enter a valid email");
		validateText(event, $("#password"), $("#passwordValidator"), 2, 50, "Please enter a valid password");
		
		if($("#loginForm")[0].checkValidity() == false){
			event.preventDefault();
			event.stopPropagation();
		}
		
		$("#loginForm").addClass("was-validated");
	});
	
	$(".readmore, .readless").click(function () {
		$(".readmore[data-id='" + $(this).data('id') + "'], .readless[data-id='" + $(this).data('id') + "'], .morecontent[data-id='" + $(this).data('id') + "']").toggle();
	});
});
