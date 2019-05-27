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
		<script src="{{ URL::asset('js/skel.min.js')}}"></script>
		<script src="{{ URL::asset('js/skel-layers.min.js')}}"></script>
		<script src="{{ URL::asset('js/init.js')}}"></script>
		<noscript>
			<link rel="stylesheet" href="{{ URL::asset('css/skel.css')}}" />
			<link rel="stylesheet" href="{{ URL::asset('css/style.css')}}" />
			<link rel="stylesheet" href="{{ URL::asset('css/style-xlarge.css')}}" />
		</noscript>
	</head>
	<body class="landing">

     @if (!Auth::guest())

             <script type="text/javascript">
                    window.location = "{{ url('home') }}"; //here double curly bracket
             </script>

     @endif
<header id="header">
				
</header>
<section id="banner">
				<h2>Welcome to faculty of computer and information</h2>
				<p>Helwan University</p>
				<ul class="actions">
					<li>
						<a href="{{ url('login') }}" class="button big">Please Login here</a>
					</li>
				</ul>
			</section>

        
   </body>
   </html>