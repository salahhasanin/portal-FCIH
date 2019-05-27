<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Slicebox - 3D Image Slider with Fallback" />
        <meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
        <meta name="author" content="Pedro Botelho for Codrops" />
        <meta charset="UTF-8">
        <title>FCIH</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <noscript>
            <link rel="stylesheet" href="{{ URL::asset('css/skel.css') }}" />
            <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
            <link rel="stylesheet" href="{{ URL::asset('css/style-xlarge.css') }}" />
        </noscript>
        <link rel="shortcut icon" href="{{ URL::asset('../favicon.ico') }}"> 
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/slicebox.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}" />
        <script type="text/javascript" src="{{ URL::asset('js/modernizr.custom.46884.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/skel.min.js') }}"></script>
        <script src="{{ URL::asset('js/skel-layers.min.js') }}"></script>
        <script src="{{ URL::asset('js/init.js') }}"></script>
    </head>
    <body>
            <header id="header">
                <h1><a href="{{ URL('home') }}">Faculity of computer and information</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="{{ URL('home') }}">Home</a></li>
                        <li><a href="generic.html">Generic</a></li>
                        <li><a href="elements.html">Elements</a></li>
                    </ul>
                </nav>
            </header>
                            
            <div class="wrapper">

                <ul id="sb-slider" class="sb-slider">
                    <li>
                        <a href="http://www.flickr.com/photos/strupler/2969141180" target="_blank"><img src="{{ URL::asset('images/1.jpg') }}" alt="image1"/></a>
                        <div class="sb-description">
                            <h3>Creative Lifesaver</h3>
                        </div>
                    </li>
                    <li>
                        <a href="http://www.flickr.com/photos/strupler/2968268187" target="_blank"><img src="{{ URL::asset('images/1.jpg') }}" alt="image2"/></a>
                        <div class="sb-description">
                            <h3>Honest Entertainer</h3>
                        </div>
                    </li>
                    <li>
                        <a href="http://www.flickr.com/photos/strupler/2968114825" target="_blank"><img src="{{ URL::asset('images/1.jpg') }}" alt="image1"/></a>
                        <div class="sb-description">
                            <h3>Brave Astronaut</h3>
                        </div>
                    </li>
                    <li>
                        <a href="http://www.flickr.com/photos/strupler/2968122059" target="_blank"><img src="{{ URL::asset('images/1.jpg') }}" alt="image1"/></a>
                        <div class="sb-description">
                            <h3>Affectionate Decision Maker</h3>
                        </div>
                    </li>
                    <li>
                        <a href="http://www.flickr.com/photos/strupler/2969119944" target="_blank"><img src="{{ URL::asset('images/1.jpg') }}" alt="image1"/></a>
                        <div class="sb-description">
                            <h3>Faithful Investor</h3>
                        </div>
                    </li>
                    <li>
                        <a href="http://www.flickr.com/photos/strupler/2968126177" target="_blank"><img src="{{ URL::asset('images/1.jpg') }}" alt="image1"/></a>
                        <div class="sb-description">
                            <h3>Groundbreaking Artist</h3>
                        </div>
                    </li>
                    <li>
                        <a href="http://www.flickr.com/photos/strupler/2968945158" target="_blank"><img src="{{ URL::asset('images/1.jpg') }}" alt="image1"/></a>
                        <div class="sb-description">
                            <h3>Selfless Philantropist</h3>
                        </div>
                    </li>
                </ul>

                <div id="shadow" class="shadow"></div>

                <div id="nav-arrows" class="nav-arrows">
                    <a href="#">Next</a>
                    <a href="#">Previous</a>
                </div>

            </div><!-- /wrapper -->
           

        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.slicebox.js') }}"></script>
        <script type="text/javascript">
            $(function() {
                
                var Page = (function() {

                    var $navArrows = $( '#nav-arrows' ).hide(),
                        $shadow = $( '#shadow' ).hide(),
                        slicebox = $( '#sb-slider' ).slicebox( {
                            onReady : function() {

                                $navArrows.show();
                                $shadow.show();

                            },
                            orientation : 'r',
                            cuboidsRandom : true,
                            disperseFactor : 30
                        } ),
                        
                        init = function() {

                            initEvents();
                            
                        },
                        initEvents = function() {

                            // add navigation events
                            $navArrows.children( ':first' ).on( 'click', function() {

                                slicebox.next();
                                return false;

                            } );

                            $navArrows.children( ':last' ).on( 'click', function() {
                                
                                slicebox.previous();
                                return false;

                            } );

                        };

                        return { init : init };

                })();

                Page.init();

            });
        </script>
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
    </body>
</html> 