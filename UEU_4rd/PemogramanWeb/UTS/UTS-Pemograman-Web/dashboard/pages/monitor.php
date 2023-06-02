<?php
	session_start();
	$action = htmlspecialchars($_POST['action']);
?>	
	<div id="maps-monitoring">&nbsp;</div>
	<script>
		var MAPS_STYLE = [{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#2c3645"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#ebe6e7"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"},{"color":"#476653"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebe6e7"}]},{"featureType":"landscape.natural.terrain","elementType":"labels","stylers":[{"visibility":"on"},{"color":"#6f0d0d"}]},{"featureType":"landscape.natural.terrain","elementType":"labels.text.stroke","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#62bf85"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":60}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#334767"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#727476"}]},{"featureType":"road.highway.controlled_access","elementType":"labels.icon","stylers":[{"saturation":"75"},{"visibility":"on"},{"hue":"#002fff"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#727476"}]},{"featureType":"road.arterial","elementType":"labels.text.stroke","stylers":[{"visibility":"simplified"},{"color":"#727476"},{"weight":"2"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"visibility":"off"},{"color":"#c2c6d9"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#727476"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry.fill","stylers":[{"visibility":"off"},{"color":"#727476"}]},{"featureType":"transit","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#f2fbf1"}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"visibility":"on"}]},{"featureType":"transit","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"transit.line","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit.station","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"transit.station","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit.station.rail","elementType":"geometry.stroke","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#3fc672"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#4da6ff"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]}];
		
		// CONFIG DATA MAPS VARIABLE
		var MAPS_EVENT 		= google.maps.event,
			MAPS_GEO_CODER 	= new google.maps.Geocoder(),
			MAP_OPTIONS		= {
				center: { lat: -0.50097, lng: 114.648926 },
				styles					: MAPS_STYLE,
				minZoom					: 2,
				maxZoom					: 20,
				zoom					: 5,
				draggable				: true,
				mapTypeId				: google.maps.MapTypeId.ROADMAP
			};
		
		// DECLARE MAPS VARIABLE
		let varMapElement = document.getElementById("maps-monitoring");
		varMapsObject 	= new google.maps.Map(varMapElement, MAP_OPTIONS);
	</script>