<html>
<head> 
<title> Google Maps API: Mengubah Latitude Longitude Menjadi Alamat dengan Geocoder </title>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initialize" async defer></script>
<script type="text/javascript">
function initialize() {
var latlng = {lat: -7.3429060999999995, lng: 109.91098219999999};
var geocoder = new google.maps.Geocoder;
geocoder.geocode({'location': latlng}, function(results, status) {
  if (status === 'OK') {
	if (results[0]) {
	  rs = results[0].formatted_address;
	} else {
	  rs = 'No results found';
	}
  } else {
	  rs = 'Geocoder failed due to: ' + status;
  }
	 alert(rs);
});
}
</script>
</head>
<body> </body>
</html>	