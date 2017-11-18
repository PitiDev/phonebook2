<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PhoneBook</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/phetsarath.css') }}">
</head>
<body>
	<div id="app">
		<Myheader></Myheader>
		<div class="container">
			<router-view></router-view>
		</div>
		<Myfooter></Myfooter>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>