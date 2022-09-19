<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<meta name="csrf-token" content="{{ csrf_token() }}"> 
	<link rel="stylesheet" href="{{mix('css/app.css')}}">
	<title>People</title>
</head>
<body>
	<div id="app">
		<x-nav></x-nav>
		{{$slot}}
	</div>

	<script src="{{ mix('js/app.js') }}" >
	</script>
	@yield('scripts')
	


</body>
</html>