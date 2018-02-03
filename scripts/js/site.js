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
	
	    // Configure/customize these variables.
    var showChar = 600;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
