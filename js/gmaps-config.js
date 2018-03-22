var map;
function initMap() {
  var depsos = {lat: -6.19906, lng: 106.852246};
  var pos = {lat: -6.1753924, lng: 106.82715280000002};
  map = new google.maps.Map(document.getElementById('map'), {
    center: pos,
    scrollwheel: false,
    zoom: 9
  });
  map.setCenter(pos);
  var directionsDisplay = new google.maps.DirectionsRenderer({
    map: map,
  });

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      map.setCenter(pos);
      var request = {
        destination: depsos,
        origin: pos,
        travelMode: 'DRIVING'
      };

      var directionsService = new google.maps.DirectionsService();
      directionsService.route(request, function(response, status) {
        if (status == 'OK') {
          directionsDisplay.setDirections(response);
        }
      });
    }, function() {

    });
  } else {
  }
}