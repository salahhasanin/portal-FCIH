@extends('layouts.app2')

@section('content')
                    
                    <section id="banner">
				                <h2>Welcome {{ Auth::user()->name }}</h2>
				
			        </section>

    <section id="one" class="wrapper style1 special">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                    {{ session('status') }}
                                    </div>
                                @endif

            <div class="container">

                    <header class="major">
						<h2>Your functions</h2>
                    </header>

                    <div class="row 150%">

						<div class="4u 12u$(medium)">
							<section class="box">
                            <a href="{{ url('stu_register') }}"><i class="icon big rounded color1 fa fa-search"></i>
								<h2>Register Course</h2></a>
							</section>
                        </div>
                        <!-------------------------!-->

					</div>

            </div>

    </section>  
        
@endsection