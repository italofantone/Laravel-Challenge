<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SPA - VUEjs & Laravel</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app">

		<nav-bar></nav-bar>
	
		<transition name="slide-fade" mode="out-in">
			<router-view :key="$route.fullPath"></router-view>
		</transition>

	</div>
	
	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>