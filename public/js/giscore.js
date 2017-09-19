
$( document ).ready(function() {
    
    console.log( "DOM ready!" );
	
	
	/*For dropdown menu bar */
	
	/* $(".dropdown").hover(    */
    
	$(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("slow");
            $(this).toggleClass('open'); 
			console.log('entro 1');	
        },
        function() {
            //$('.dropdown-menu', this).stop( true, true ).slideUp("slow");
            //$(this).toggleClass('open');
			//console.log('entro 2');				
        }
    );
	
	
	$("#closemenubar").click(            
        function() {
            $('.dropdown-menu', ".dropdown").stop( true, true ).slideUp("slow");
            $(".dropdown").toggleClass('open');
			console.log('entro 2');				
        }
    );
	
	/*For dropdown menu bar */


	var palmira_extent = [[3.50304, -76.3479], [3.56584, -76.2359]];
	var palmira_rural_extent = [[3.4212, -76.4696], [3.70933, -76.0035]];
	var enblanco = L.tileLayer("");


	var home = {
	  lat: 3.53464,
	  lng: -76.29666,
	  zoom: 16
	}; 



    //var mymap = L.map('giscore_map').setView([51.505, -0.09], 13);


    var mymap = L.map("giscore_map", {
		crs: L.CRS.EPSG3857,
		//center: [home.lat,home.lng],
		maxZoom: 18,
		//minZoom: 3,
		//zoom: home.zoom,
		layers: [enblanco],
		attributionControl: true,
		zoomControl: false
	});

	mymap.fitBounds(palmira_extent);



	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);

	/*L.marker([51.5, -0.09]).addTo(mymap)
		.bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

	L.circle([51.508, -0.11], 500, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("I am a circle.");

	L.polygon([
		[51.509, -0.08],
		[51.503, -0.06],
		[51.51, -0.047]
	]).addTo(mymap).bindPopup("I am a polygon.");*/


	var popup = L.popup();

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent("You clicked the map at " + e.latlng.toString())
			.openOn(mymap);
	}

	mymap.on('click', onMapClick);


	jQuery.noConflict();
    $('#myModalWellcome').modal('show');

});


	