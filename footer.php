<?php
	// Get filename
	$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
	$hp_basename = 'index';
?>
	
	<?php if ($basename == $hp_basename) : ?>
	
	<?php else : ?>
	
		<footer id="footer" role="contentinfo">
			<div class="container">
				<a href="#top" id="go-to-top-link" title="Scroll to the top"><i class="fa fa-angle-up"></i></a>
				<p>&copy; 2016 PURENINE Studios Inc.</p>
				<ul>
					<li><a href="#">Behance</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Dribbble</a></li>
					<li><a href="#">Instagram</a></li>
					<li><a href="#">Github</a></li>
					<li><a href="#">Facebook</a></li>
				</ul>
			</div>
		</footer>
	
	<?php endif; ?>
		
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<?php if ($basename == 'work') : ?>
		<script type="text/javascript" src="js/jquery.quicksand.min.js"></script>
	<?php endif; ?>
	<script type="text/javascript" src="js/site.js"></script>
	
	<?php if ($basename == 'contact') : ?>
	
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script>
		jQuery(function() {
			if (typeof(google) !== "undefined") {
				var map_name = 'custom_gmap',
					// set location
					location = new google.maps.LatLng(40.796146, -73.960157),
					// set marker position
					marker_pos = new google.maps.LatLng(40.796146, -73.960157),
					marker_title = 'Peter',
					stylers = [{ 
						"featureType": "all", 
						"elementType": "all",
						"stylers": [ { "saturation": "-80" }, { "lightness": 20 } ]
					}],
					mapOptions = { zoom: 12, center: location, mapTypeId: map_name, mapTypeControl: false, scrollwheel: false },
					map = new google.maps.Map(document.getElementById("gmap"), mapOptions),
					styledMapOptions = { map: map, name: map_name + "_map" },
					marker = new google.maps.Marker({
						position: marker_pos,
						map: map,
						title: marker_title,
						icon: 'img/sample-marker.png'
					}),
					custommap = new google.maps.StyledMapType(stylers,styledMapOptions);
				map.mapTypes.set(map_name, custommap);
				map.setMapTypeId(map_name);
			}
		});
		</script>
	
	<?php endif; ?>
	
</body>
</html>