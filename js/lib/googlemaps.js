		function initialize()
		{
		var mapProp = {
		  center:myCenter,
		  scrollwheel: false,
		  zoom:15,
		  zoomControl: true,
		  disableDefaultUI:true,    
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
		
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		
		var marker=new google.maps.Marker({
		  position:myCenter,
		  });
		  
		  		
		marker.setMap(map);
		
		var styles = [
		  {
		    stylers: [
		      { hue: colorMap },
		      { saturation: -10 }
		    ]
		  },{
		    featureType: "road",
		    elementType: "geometry",
		    stylers: [
		      { lightness: 100 },
		      { visibility: "simplified" }
		    ]
		  },{
		    featureType: "road",
		    elementType: "labels",
		    stylers: [
		      { visibility: "off" }
		    ]
		  }
		];
		
		map.setOptions({styles: styles});
	

		}
		
		
		google.maps.event.addDomListener(window, 'load', initialize);