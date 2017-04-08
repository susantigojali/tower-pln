<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tower PLN</title>

        <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ url('css/bootstrap-theme.min.css') }}" rel="stylesheet" />
        <script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script> 

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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
                font-size: 50px;
            }

            .m-b-md {
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img alt="logo" src="{{ url('img/logo-pln.jpg') }}" height="20" width="20">
                    </a>
                    <a class="navbar-brand" href="#">PLN</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('tower.index')}}">Tower</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('tower.showMap')}}">Map</a></li>
                    </ul>
                </div>
            </div>
            </nav>
            <div class="flex-center position-ref">
                <div class="content">
                    <div class="title m-b-md">
                        TOWER MAP 
                    </div>
                   </div>
                </div>
                <div id="map" style="width:100%;height:430px;"></div>
            </div>
        </div>
        
    </body>
<script>
function initMap() {
    var indonesia = new google.maps.LatLng(2,120);

    var mapCanvas = document.getElementById("map");
    var mapOptions = {center: indonesia, zoom: 4};
    var map = new google.maps.Map(mapCanvas, mapOptions);

    $.get('/tower',function(data) {
        console.log("~~ " + data.length);
        for(var i = 0; i < data.length; i++) {
            var name = data[i]['name'];
            var long1 = data[i]['long1'];
            var lat1 = data[i]['lat1'];
            var long2 = data[i]['long2'];
            var lat2 = data[i]['lat2'];
            var long3 = data[i]['long3'];
            var lat3 = data[i]['lat3'];
            var long4 = data[i]['long4'];
            var lat4 = data[i]['lat4'];

            var point1 = new google.maps.LatLng(lat1,long1);
            var point2 = new google.maps.LatLng(lat2,long2);
            var point3 = new google.maps.LatLng(lat3,long3);
            var point4 = new google.maps.LatLng(lat4,long4);

            var centerLat = (Number(lat1) + Number(lat2) + Number(lat3) + Number(lat4) )/4;
            var centerLong = (Number(long1) + Number(long2) + Number(long3) + Number(long4))/4;
            console.log(centerLat + " " + centerLong);

            console.log(i + " " + name + " " + long1 + " " + lat1 +" " + long2 + " " + lat2);

            var towerPath = new google.maps.Polygon({
                path: [point1, point2, point3, point4],
                strokeColor: "#0000FF",
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: "#0000FF",
                fillOpacity: 0.4
            });
            towerPath.setMap(map);

            var position =  new google.maps.LatLng(centerLat, centerLong);
            var marker = new google.maps.Marker({
                position: position,
                map: map
            });

            var infowindow = new google.maps.InfoWindow();

            var content = "<strong>" + name + "</strong> <br> P1: (" + long1 + ", " + lat1 +")<br> P2: (" + long2 + ", " + lat2 +")<br> P3: (" + long3 + ", " + lat3 +")<br> P4: (" + long4 + ", " + lat4 +")<br>";

            google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
                return function() {
                    infowindow.setContent(content);
                    infowindow.open(map,marker);
                };
            })(marker,content,infowindow));  
        }
    },
    'json'
    );
}

function listenMarker (marker, infowincontent)
{
    // so marker is associated with the closure created for the listenMarker function call
    var infowincontent = document.createElement('div');
    google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(infowincontent);
        tooltip.open(map, marker);
    });
}


function bindInfoWindow(marker, map, infowindow, description) {
    marker.addListener('click', function() {
        infowindow.setContent(description);
        infowindow.open(map, this);
    });
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOOXXm-SYFHfvs8INZeCjkhLDXsN0tGiU&callback=initMap" type="text/javascript"></script>

</html>
