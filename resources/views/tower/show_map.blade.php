<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            <div class="content">
                <div class="title m-b-md">
                    TOWER MAP
                </div>
               </div>
            </div>
            <div id="map" style="width:100%;height:500px;"></div>
        </div>
    </body>

<script>
function myMap() {
    var amsterdam = new google.maps.LatLng(52,5.);

    var mapCanvas = document.getElementById("map");
    var mapOptions = {center: amsterdam, zoom: 3};
    var map = new google.maps.Map(mapCanvas,mapOptions);


    @foreach ($towers as $tower)
        var long1 = {{$tower->long1}};
        var lat1 = {{$tower->lat1}};
        var long2 = {{$tower->long2}};
        var lat2 = {{$tower->lat2}};
        var long3 = {{$tower->long3}};
        var lat3 = {{$tower->lat3}};
        var long4 = {{$tower->long4}};
        var lat4 = {{$tower->lat4}};

        var point1 = new google.maps.LatLng(lat1,long1);
        var point2 = new google.maps.LatLng(lat2,long2);
        var point3 = new google.maps.LatLng(lat3,long3);
        var point4 = new google.maps.LatLng(lat4,long4);

     var towerPath = new google.maps.Polygon({
        path: [point1, point2, point3, point4],
        strokeColor: "#0000FF",
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: "#0000FF",
        fillOpacity: 0.4
      });
      towerPath.setMap(map);
    @endforeach
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDOOXXm-SYFHfvs8INZeCjkhLDXsN0tGiU &callback=myMap"></script>
</html>
