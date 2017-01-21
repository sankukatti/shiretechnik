<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>
		@yield('title')
	</title>
	
	<!-- STYLES -->
	<link rel="stylesheet" type="text/css" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/app/styles/style.css">

	<!-- SCRIPTS -->
	<script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="/app/scripts/focus_contact_us.js"></script>
	<script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/app/scripts/bootstrap-dropdown-hover.js"></script>

</head>
<body>
	<div class="wrapper">
		@include('layouts.header')
		<div class="content">
			@yield('content')
		</div>	
		@include('layouts.footer')
	</div>
</body>
</html>