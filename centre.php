<!DOCTYPE html>
<html>
  <head>
  	<link href="./index.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Fii parte la schimbare</title>
    <style>
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
	<header><h1 id="title">FII PARTE LA SCHIMBARE</h1>
		<h2>CENTRE DE RECICLARE</h2>
		<div id="navbar">
	<a href="index.html">Acasa</a>
	<a href="probleme.html">PROBLEME</a>
	<a href="rezolvari.php">REZOLVARI</a>
	<a href="linkuri.html">Linkuri utile</a>
</div>
	</header>

    <div id="map"></div>
    <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: 46.7712101, lng: 23.623635299999933}
        });

        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
        {lat: 46.7952266, lng: 23.612515900000062},
        {lat: 46.78194999999999, lng: 23.561769300000037},
        {lat: 46.764723, lng: 23.56867120000004},
        {lat: 46.752296, lng: 23.532921299999998},
        {lat: 46.7323041, lng: 23.483398699999952},
        {lat: 46.794152, lng: 23.672811000000024}
      ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBL2kBuezw5oR4kCNGlrbJASvsvokllfL4&callback=initMap">
    </script>
  </body>
</html>