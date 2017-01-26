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

			<div class="flash-message">
			    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
			      @if(Session::has('alert-' . $msg))

			      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
			      @endif
			    @endforeach
			</div> <!-- end .flash-message -->

			@yield('content')
		</div>	
		@include('layouts.footer')
	</div>
</body>
</html>