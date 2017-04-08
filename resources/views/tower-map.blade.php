<?php $user = \Auth::user() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tower PLN</title>
	<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ url('css/bootstrap-theme.min.css') }}" rel="stylesheet" />
	<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
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
		@yield('main-page')
	</div>
</body>
</html>