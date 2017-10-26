<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<!-- Navbar Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/link.css') }}">
	@yield('style')

</head>
<body>

<!-- NavBar -->
<div class="cbp-af-header">
	<div class="cbp-af-inner center">
		<nav class="cl-effect-21">
			<a href="/">Home</a>
			<span class="large-margin"></span>
			<a href="/cart">Cart</a>
			@if (Auth::guest())
				<a href="/user/signin" id="signin"> Sign In </a>
			@else
				<a href="/user/logout">	Logout </a>
			@endif

		</nav>
	</div>
</div>

@yield('content')

<!-- Navbar Scripts -->
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.min.js"></script>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
@yield('script')
</body>
</html>