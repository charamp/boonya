<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>
		<link href='http://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
		<link rel='stylesheet' href='{{ URL::asset("css/boonya-style.css") }}'>
		<link rel='stylesheet' href='{{ URL::asset("css/materialize.css") }}'>

		<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
	</head>
	<body>
		<div class="navbar-fixed">
			<nav>
				<div class='nav-wrapper teal lighten-2'>
					<a href='#' class='brand-logo'>Logo</a>
					<ul id='nav-mobile' class='right hide-on-med-and-down'>
						<li><a href='/'>หน้าหลัก</a></li>
						<li><a href='/amulet'>พระเครื่องทั้งหมด</a></li>
						<li><a href='/howtobuy'>ขั้นตอนการเช่าพระเครื่อง</a></li>
						<li><a href='/contact'>ติดต่อเรา</a></li>
					</ul>
				</div>
			</nav>
		</div>

		@if($view_name=='home-home')

			<div class='section no-pad-top'>
				<div class='section no-pad-bot blue lighten-4 start-splash-section '>
					<div class='row'>
						<div class='col s12 l6'>
						</div>
						<div class='col s12 l6'>
						</div>
					</div>
				</div>
			</div>

		@endif

		<div class='container'>

			@yield('home.home')
			@yield('amulet.amuletlist')
			@yield('management.howtobuy')
			@yield('management.contac')
			@yield('admin.addamulet')

		</div>

		<footer class="page-footer teal lighten-2">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">บุญญาบารมีพระเครื่อง</h5>
						<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
					</div>
				</div>
			</div>
		<div class="footer-copyright">
			<div class="container">
				© 2017 Copyright Text
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			</div>
		</div>
		</footer>

		<script type='text/javascript' src='{{ URL::asset("js/jquery-3.1.1.min.js") }}''></script>
		<script type='text/javascript' src='{{ URL::asset("js/materialize.min.js") }}''></script>
		<script type="text/javascript" src="{{ URL::asset('js/boonya-script.js') }}"></script>

		@yield('javascript')

	</body>
</html>
