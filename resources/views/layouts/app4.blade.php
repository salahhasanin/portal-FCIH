<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>FCIH</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
		<script src="{{ URL::asset('js/skel.min.js') }}"></script>
		<script src="{{ URL::asset('js/skel-layers.min.js') }}"></script>
		<script src="{{ URL::asset('js/init.js') }}"></script>
		<noscript>
			<link rel="stylesheet" href="{{ URL::asset('css/skel.css') }}" />
			<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
			<link rel="stylesheet" href="{{ URL::asset('css/style-xlarge.css') }}" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="{{ URL('home') }}">FCIH</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="{{ URL('home') }}">Home</a></li>
						<li><a href="generic.html">Generic</a></li>
                        <li><a href="elements.html">Elements</a></li>
					</ul>
				</nav>
			</header>

			
        @yield('content')


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>




