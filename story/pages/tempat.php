<div class="row">
<div id="map" style="height:300px; width:80%;margin-left:10%;clear:both;position:absolute;"></div>
</div>
<script>
  var map;
  function initMap() {
    var depsos = {lat: -6.19906, lng: 106.852246};
    // default di monas
    var pos = {lat: -6.1753924, lng: 106.82715280000002};
    map = new google.maps.Map(document.getElementById('map'), {
      center: pos,
      scrollwheel: false,
      zoom: 9
    });
    map.setCenter(pos);
    var directionsDisplay = new google.maps.DirectionsRenderer({
      map: map,
      // suppressMarkers:true
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

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA67aTCwFcc5iu7wQaN-t8j1ZuUsl1gwfs&callback=initMap"></script>