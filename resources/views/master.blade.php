<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rent Car</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link media="all" rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}" type="text/css" />
	<link media="all" rel="stylesheet" href="{{ url('/css/sheet.css') }}" type="text/css" />
	<link media="all" rel="stylesheet" href="{{ url('/awesome/css/font-awesome.min.css') }}" type="text/css" />
	<link media="all" rel="stylesheet" href="{{ url('css/custom-slider.css') }}" type="text/css" />
	<link media="all" rel="stylesheet" href="{{ url('/css/unslider.css') }}" type="text/css" />
	<link media="all" rel="stylesheet" href="{{ url('/css/unslider-dots.css') }}" type="text/css" />
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
	<script src="{{ url('/js/jquery.js') }}"></script>
	<script src="{{ url('/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('/js/unslider-min.js') }}"></script>
	<script>
		jQuery(document).ready(function($) {
			$('.my-slider').unslider();
		});
	</script>
</head>
<body>
	@include('layouts.header')
	@yield('content')
	@include('layouts.footer')
</body>
</html>