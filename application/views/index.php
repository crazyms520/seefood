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
        position: relative ;
        height: 100%;
        margin: 0;
        padding: 0;
      }

      .container {
        width: 100%;
        height: 100%;
      }

      .nav-bar {
          position: fixed;
          bottom: 0;
          left: 50%;
          z-index: 1;
      }

      .circle {
          display: inline-block;
          width: 50px;
          height: 50px;
          border-radius: 50%;
          background-color: rgba(142, 249, 172, 0.5);
      }

      .circle:hover {
        width: 55px;
        height: 55px;
        background-color: rgba(142, 249, 172, 1);
      }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="nav-bar">
            <div class="circle" ></div>
            <div class="circle" ></div>
            <div class="circle" ></div>
        </div>
        <!-- google map-->
        <div id="map"></div>
        <!-- google map-->
        <script>
            var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 25.0169639, lng: 121.226184},
                gestureHandling:"greedy",
                zoom: 12
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmzoj1hdNeUrzN-H27I48ecIk5aQ1LTVk&callback=initMap"
        async defer></script>
    </div>
  </body>
</html>
