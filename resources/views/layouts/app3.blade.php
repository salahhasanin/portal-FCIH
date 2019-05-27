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

<footer id="footer">
			<br><br>
				<div class="container">
					
					<div class="row">
						<div class="8u 12u$(medium)">
							<ul class="copyright">
								<li>&copy; FCIH. All rights reserved.</li>
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
							<ul class="icons">
								<li>
									<a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
								</li>
								<li>
									<a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
								</li>
								<li>
									<a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
								</li>
								<li>
									<a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>




