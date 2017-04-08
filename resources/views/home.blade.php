<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Control of Coordinate</title>

        <!-- Fonts -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image:url('img/35000.jpg');
                background-size: contain;
                background-color: #fff;
                color: #87CEFA;
                font-family: 'calibri', sans-serif;
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
            }

            .position-ref {
                position: relative;
            }

            .title {
                font-size: 225px;
                font-weight: 700
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 40px;
                font-weight: 900;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .right {
                position: absolute;
                right: 0px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container" style="width: 100%">
                <div class="row">
                    <div class="col-sm-8" style="padding-left: 100px">
                        <div class="title">
                            PLN
                        </div>
                        <div class="links">
                            <a href="{{ url('tower') }}">Tower</a>
                            <a href="{{ route('tower.showMap') }}">Map</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{ url('img/logo-pln.jpg') }}" class="img-responsive right" alt="logo" width="200" >
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
