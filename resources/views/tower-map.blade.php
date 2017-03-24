<?php $user = \Auth::user() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tower PLN</title>
	<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ url('css/bootstrap-theme.min.css') }}" rel="stylesheet" />
	<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/jquery-2.1.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/almadina.js') }}"></script>
</head>

<body>
<div class="container">
	<h1><img height="70" width="50" src="{{ url('img/logo-pln.jpg') }}" alt="logo-pln" /> Tower PLN</h1>
	
	@yield('main-page')
</div>
</body>
</html>