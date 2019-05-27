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
		<noscript>
			<link rel="stylesheet" href="{{ URL::asset('css/skel.css')}}" />
			<link rel="stylesheet" href="{{ URL::asset('css/style.css')}}" />
			<link rel="stylesheet" href="{{ URL::asset('css/style-xlarge.css')}}" />
		</noscript>
		<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
		<script src="{{ URL::asset('js/skel.min.js')}}"></script>
		<script src="{{ URL::asset('js/skel-layers.min.js')}}"></script>
		<script src="{{ URL::asset('js/init.js')}}"></script>
		
	</head>
	<body class="landing">
<header id="header">
				
				<h1><a href="{{ url('/') }}"><img src="{{ URL::asset('images/logo.png') }}"></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="{{ url('home') }}">Home</a></li>
						<li><a href="generic.html">Generic</a></li>
						<li><a href="elements.html">Elements</a></li>
                        <li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                         
                                
						<li><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                               
                            </li>
                        @endif
                    </ul></li>
				</nav>
</header>


        @yield('content')

        <footer id="footer">
			<br><br>
				<div class="container">
					
					<div class="row">
						<div class="8u 12u$(medium)">
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved.</li>
								<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
								<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
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
