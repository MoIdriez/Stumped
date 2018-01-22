$(function () {
	function myMap() {
	  var mapCanvas = document.getElementById("map");
	  var mapLocation = new google.maps.LatLng(51.7480162, -1.1280869);
	  var mapOptions = {
		center: mapLocation, zoom: 16
	  };
	  var map = new google.maps.Map(mapCanvas, mapOptions);
	  
	  var markerLocation = new google.maps.LatLng(51.748824, -1.126202);
	  var marker = new google.maps.Marker({
				position: markerLocation,
				map: map
			});
	}
	
	google.maps.event.addDomListener(window, 'load', myMap);
});