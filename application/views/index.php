<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        position: absolute;
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .nav-bar {
          position: fixed;
          bottom: 0;
          left: 0;
      }
      .circle {
          border-radius: 50%;
          background: black;
      }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="nav-bar">
            <div class="circle" >
            <div class="circle" >
            <div class="circle" >
        </div>
        

        </div>
        <div id="map"></div>
    
        <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 25.0169639, lng: 121.226184},
            gestureHandling:"greedy",
            zoom: 14
            });
        }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmzoj1hdNeUrzN-H27I48ecIk5aQ1LTVk&callback=initMap"
        async defer></script>
    </div>
  </body>
</html>
