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

        @font-face {
            font-family: 'icomoon';
            src:  url('icomoon/fonts/icomoon.eot?sd6w5h');
            src:  url('icomoon/fonts/icomoon.eot?sd6w5h#iefix') format('embedded-opentype'),
                url('icomoon/fonts/icomoon.ttf?sd6w5h') format('truetype'),
                url('icomoon/fonts/icomoon.woff?sd6w5h') format('woff'),
                url('icomoon/fonts/icomoon.svg?sd6w5h#icomoon') format('svg');
            font-weight: normal;
            font-style: normal;
        }
        [class^="icon-"], [class*=" icon-"] {
        /* use !important to prevent issues with browser extensions that change fonts */
            font-family: 'icomoon' !important;
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            /* Better Font Rendering =========== */
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .icon-spoon-knife:before {
            display: inline-block;
            text-align: center;
            font-size: 30px;
            width: 50px;
            height: 50px;
            line-height: 50px;
            content: "\e9a3";
            border-radius: 50%;
            background-color: rgba(142, 249, 172, .5);
            -webkit-transition: all;
            -moz-transition: all; 
            transition: all;
            
        }
        .icon-heart:before {
            display: inline-block;
            text-align: center;
            font-size: 30px;
            width: 50px;
            height: 50px;
            line-height: 50px;
            content: "\e9da";
            border-radius: 50%;
            background-color: rgba(142, 249, 172, .5);
            -webkit-transition: all;
            -moz-transition: all; 
            transition: all;
        }
        .icon-spoon-knife:hover::before ,.icon-heart:hover::before {
            font-size: 35px;
            width: 55px;
            height: 55px;
            line-height: 55px;
            cursor: pointer;
            background-color: rgba(142, 249, 172, 1);
        }
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
            display: inline-block;
            bottom: 0;
            left: 50%;
            z-index: 1;
        }
        .circle {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 60px;  
        }
        
    </style>
  </head>
  <body>
    <div class="container">
        <div class="nav-bar">
            <div class="circle" >
                <span class="icon-spoon-knife">
            </div>
            <div class="circle" >
                <span class="icon-heart"></span>
            </div> 
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
