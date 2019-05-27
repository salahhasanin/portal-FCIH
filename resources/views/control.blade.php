@extends('layouts.app2')

@section('content')

<section id="banner">
				                <h2>Hi {{ Auth::user()->name }}</h2>
				                <p>Scroll down for your preveligae</p>
				
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

                   
                    <!-------------------------!-->

                    <div class="row 150%">

						<div class="4u 12u$(medium)">
							<section class="box">
                            <i class="icon big rounded color1 far fa-edit"></i>
                                <h2>Put Grades</h2>
                                <form method="get" action="{{ URL('studentGrades') }}">
									<select style="height: 40px;background: #c4c7cc" name="level">
									<option value="1">level 1</option>
									<option value="2">level 2</option>
									<option value="3">level 3</option>
									<option value="4">level 4</option>
									</select>
									<br>
								<input type="submit" name="submit">
								</form>
                            </section>
                        </div>

                            <!-------------------------!-->
					</div>

            </div>

    </section>
		

@endsection