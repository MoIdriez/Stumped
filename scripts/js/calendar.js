function openEvent(events) {
	
	if (events.length > 0 ) {
		$("#modalTitle").html("Events on that day");
		var content = '';
		events.forEach(function(ev) {
			content += '<h3 style="color:' + ev["color"] + '">' + ev["name"] + '</h3>'
						+ '<p><b>Description:</b></p><p> ' + ev["desc"] + '</p>'
						+ '<p><b>Location:</b> <a href="' + ev["locationLink"] + '">' + ev["location"] + '</a></p>'
						+ '<p><b>Link:</b> <a target="_blank" href="' + ev["link"] + '"> click here </a></p>';			
		});
		$(".modal-body").html(content);
		$('#modalCentered').modal();	
	}
}

function getEvents() {
	var data = { "action" : "getEvents" };
	data = $(this).serialize() + "&" + $.param(data);
	
	$.ajax({
		type: "POST",
		dataType: "json",
		url: "/stumped-final/scripts/php/event.php",
		data: data,
		success: function(data) {
			var dataSource = [];
			Object.keys(data).forEach(function(key) {
				if (data[key]["USERTYPEID"] === usertypeid) {
					dataSource.push({
						id: data[key]["ID"],
						color: data[key]["USERTYPEID"] === "2" ? "blue" : "green",
						name: data[key]["NAME"],
						desc: data[key]["DESCRIPTION"],
						link: data[key]["LINK"],
						location: data[key]["LOCATION"],
						locationLink: data[key]["LOCATIONLINK"],
						startDate: new Date(data[key]["STARTTIME"]),
						endDate: new Date(data[key]["ENDTIME"])
					});
				}
			});
			$('#calendar').data('calendar').setDataSource(dataSource);
		}
	});
	
}

$(function() {
    var currentYear = new Date().getFullYear();

    $('#calendar').calendar({ 
        enableContextMenu: true,
        //enableRangeSelection: true,
        //selectRange: function(e) {
		//	debugger;
        //    openEvent({ startDate: e.startDate, endDate: e.endDate });
        //},
		clickDay: function(e) {
			openEvent(e.events);
		},
        mouseOnDay: function(e) {
            if(e.events.length > 0) {
                var content = '';
                
                for(var i in e.events) {
                    content += '<div class="event-tooltip-content">'
                                    + '<div class="event-name" style="color:' + e.events[i].color + '">' + e.events[i].name + '</div>'
                                    + '<div class="event-location">' + e.events[i].location + '</div>'
                                + '</div>';
                }
            
                $(e.element).popover({ 
                    trigger: 'manual',
                    container: 'body',
                    html:true,
                    content: content
                });
                
                $(e.element).popover('show');
            }
        },
        mouseOutDay: function(e) {
            if(e.events.length > 0) {
                $(e.element).popover('hide');
            }
        },
        dayContextMenu: function(e) {
            $(e.element).popover('hide');
        }
    });
	
	getEvents();
});