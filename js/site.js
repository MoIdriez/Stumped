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
	
	$("#storiesForm").on('submit', function(event){
		debugger;
		if($("form")[0].checkValidity() == false){
			event.preventDefault();
			event.stopPropagation();
		}
		//form.classList.add("was-validated");

		if($("#firstname").length < 2 || $("#firstname").length > 50){
			debugger;
			event.preventDefault();
			event.stopPropagation();
			$("#firstname").addClass("is-invalid");
			$("#firstname")[0].setCustomValidity("zzz");
			$("#firstnameValidator").html("Please input your first name");
		}
		
		if($("#lastname").length < 2 || $("#lastname").length > 50){
			debugger;
			event.preventDefault();
			event.stopPropagation();
			$("#lastname").addClass("is-invalid");
			$("#lastname")[0].setCustomValidity("zzz");
			$("#lastnameValidator").html("Please input your last name");
		}
		
		if($("#lastname").length < 2 || $("#lastname").length > 50){
			debugger;
			event.preventDefault();
			event.stopPropagation();
			$("#lastname").addClass("is-invalid");
			$("#lastname")[0].setCustomValidity("zzz");
			$("#lastnameValidator").html("Please input your last name");
		}
		
		debugger;
		if($("#story").length < 2 || $("#story").length > 500) {
			event.preventDefault();
			event.stopPropagation();
			$("#story").addClass("is-invalid");
			$("#story")[0].setCustomValidity("zzz");
			$("#storyValidator").html("Please input between 2 and 500 characters");
		}
		
		$("#storiesForm").addClass("was-validated");
	});
});
