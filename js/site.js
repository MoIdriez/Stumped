$(document).ready(function () {
	
	$("[name='options']").on("change", function () { 
		
		// logging of result
		var optionChosen = $(this).val();
		console.log(optionChosen);
		
		if (optionChosen == "serious") {
			$("#serious").removeClass("d-none");
			$("#fun").addClass("d-none");
		} else {
			$("#fun").removeClass("d-none");
			$("#serious").addClass("d-none");
		}
	});
	
	if (/[?&]r=/.test(location.search)) {
		$('#modalCentered').modal('show')
		if(window.location.search.replace('?r=', '') == 'success') {
			$(".modal-body").html("Thank you, your message was successfully received by us.");
		} else {
			$(".modal-body").html("Your message failed could you please try again or contact us at ...");
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
			e.addClass("is-invalid");
			e[0].setCustomValidity("");
			evl.html("");
		}
	}
	
	$("#contactForm").on('submit', function(event){
		debugger;
		
		validateText(event, $("#firstname"), $("#firstnameValidator"), 2, 50, "Please input your first name");
		validateText(event, $("#lastname"), $("#lastnameValidator"), 2, 50, "Please input your last name");
		validateText(event, $("#message"), $("#messageValidator"), 2, 225, "Please input between 2 and 225 characters");
		
		if($("form")[0].checkValidity() == false){
			event.preventDefault();
			event.stopPropagation();
		}
		
		$("#contactForm").addClass("was-validated");
	});
	
	$("#storiesForm").on('submit', function(event){
		debugger;
		
		validateText(event, $("#firstname"), $("#firstnameValidator"), 2, 50, "Please input your first name");
		validateText(event, $("#lastname"), $("#lastnameValidator"), 2, 50, "Please input your last name");
		validateText(event, $("#story"), $("#messageValidator"), 2, 225, "Please input between 2 and 225 characters");
		
		if($("form")[0].checkValidity() == false){
			event.preventDefault();
			event.stopPropagation();
		}
		
		$("#storiesForm").addClass("was-validated");
	});
});
