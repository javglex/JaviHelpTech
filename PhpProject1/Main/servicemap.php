<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Coverage map</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link rel="stylesheet" type="text/css" href="CSS/mainStyle.css">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    </head>
    
    <body>
        
        <div id="wrapper">
            <header>
                <img alt = "logo" src="Images/javitechbanner-01.png">
            </header>

            <!-- navigation bar section -->
            <hr id="thinhr">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html#services">Services</a></li>
                    <li><a href="aboutme.html">About me</a></li>
                    <li><a href="index.html#contact">Contact</a></li>
                    <li><a href="javiForm.php">Form</a></li>
                    <li><a class="current" href="servicemap.php">Map</a></li>
                </ul>
            </nav>
            <hr id="thinhr">
            <?php
            // put your code here
            ?>
            
            <div class="mapTitle">
                <h2>Service Coverage</h2>
                <h3>If you're within the area of the map, you're covered!</h3>
                <h4>If you have any questions about area coverage <a href=index.html#contact>contact me.</a></h4>
            </div>

            <div id="map"></div>
            <br><br><br><br><br><br><hr>
            <script>
            function myMap() {
              var mapCanvas = document.getElementById("map");
              var mapOptions = {
                center: new google.maps.LatLng(37.75, -122.2), 
                zoom: 11,
                disableDefaultUI: true,
                draggable: false, 
                zoomControl: false, 
                scrollwheel: false, 
                disableDoubleClickZoom: true
              }
              var map = new google.maps.Map(mapCanvas, mapOptions);
              
            }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?callback=myMap&libraries=places&key=AIzaSyA7Xr5MfEpKZ85aQg2-Hw39ODx34u8wgzs"></script>
        </div>
    </body>
</html>
