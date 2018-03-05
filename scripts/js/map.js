$(function () {
	function myMap() {
	  var mapCanvas = document.getElementById("map");
	  var mapLocation = new google.maps.LatLng(51.7548008, -1.2228861,17);
	  var mapOptions = {
		center: mapLocation, zoom: 16
	  };
	  var map = new google.maps.Map(mapCanvas, mapOptions);
	  
	  var markerLocation = new google.maps.LatLng(51.754651, -1.224120);
	  var marker = new google.maps.Marker({
				position: markerLocation,
				map: map
			});
	}
	
	google.maps.event.addDomListener(window, 'load', myMap);
});