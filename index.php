<?php ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width" />

        <!-- Included CSS files -->
        <link rel="stylesheet" href="stylesheets/main.css"> 

        <title>Lingyen Mountain Temple Australia</title>
    </head>

    <body>

        <!-- Main Body
            ================================================== -->
        <h2>Contact Us:</h2>
        <h4>21 Vivian Cres, Berala NSW 2141</h4>
        <h4>(02) 9643 8633</h4>
        
        <!-- Google Map API -->
        <div id="googleMap" style="width:100%;height:400px;"></div>

        <script>
            function myMap() {
                /*var mapProp= {
                 center:new google.maps.LatLng(-33.870637,151.034511),
                 zoom:19
                 };
                 var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                 var marker = new google.maps.Marker({position: myCenter});
                 marker.setMap(map);*/
                var myCenter = new google.maps.LatLng(-33.870637, 151.034511);
                var mapCanvas = document.getElementById("googleMap");
                var mapOptions = {center: myCenter, zoom: 19};
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var marker = new google.maps.Marker({position: myCenter});
                marker.setMap(map);
            }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARznB-Hj0xjqgkhVXs0sedZs6e0y-vyhI&callback=myMap"></script>



        <!--================ Footer  ================-->
        <footer>
            <hr/>
            <small align="center">&copy; 2018.<br>Designed by Vanessa M.</small>
            <a href="#top" align="right">Back to top</a>
        </footer>
    </body>
</html>