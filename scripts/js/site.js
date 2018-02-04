$(document).ready(function () {
	
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
		
		if($("form")[0].checkValidity() == false){
			event.preventDefault();
			event.stopPropagation();
		}
		
		$("#contactForm").addClass("was-validated");
	});
	$(".readmore, .readless").click(function () {
		$(".readmore[data-id='" + $(this).data('id') + "'], .readless[data-id='" + $(this).data('id') + "'], .morecontent[data-id='" + $(this).data('id') + "']").toggle();
	});
});
