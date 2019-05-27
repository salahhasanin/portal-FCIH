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

                    <div class="row 150%">

						<div class="4u 12u$(medium)">
							<section class="box">
                            <a href="{{ url('showTable') }}"><i class="icon big rounded color1 fa fa-table"></i>
								<h2>Manage Tables</h2></a>
							</section>
                        </div>
                        <!-------------------------!-->
						<div class="4u 12u$(medium)">
							<section class="box">
                            <a href="{{ url('studentNoPay') }}"><i class="icon big rounded color1 fa fa-money"></i>
								<h2>Payment</h2></a>
							</section>
                        </div>
                        <!-------------------------!-->
                        <div class="4u 12u$(medium)">
                            <section class="box">
                                <a href="{{ url('newsview') }}"><i class="icon big rounded color1 fa fa-newspaper-o"></i>
                                    <h2>Make news</h2></a>
                            </section>
                        </div>

                    </div>

                    <!-------------------------!-->

                    <div class="row 150%">

						<div class="4u 12u$(medium)">
							<section class="box">
                            <i class="icon big rounded color1 fa fa-book"></i>
                                <h2>Manage Courses</h2>
                                <form method="get" action='{{ url("coursesDetails") }}'>
                                <select style="height: 40px;background: #c4c7cc" name='department'>
                                    <option value='1'>CS</option>
                                    <option value='2'>IS</option>
                                    <option value='3'>IT</option>
                                    <option value='4'>SWE</option>
                                    <option value='5'>HU</option>
                                    <option value='7'>MA</option>
                                    <option value='6'>ST</option>
                                </select>
                                <br>
                                <input type="submit" value="Submit">
                                </form>
                            </section>
                        </div>

                            <!-------------------------!-->

                        <div class="4u 12u$(medium)">
                            <section class="box">
                            <i class="icon big rounded color1 fa fa-user"></i>
                                <h2>Course Registration</h2>
                                <form method="get" action='{{ url("openCourse") }}'>
                                <input style="height: 40px;background: #c4c7cc" type="number" name="courses">
                                @if ($errors->has('courses'))
                                    <span class="help-block">
                                        <strong style="color:red">You must choose from 6 to 12 courses</strong>
                                    </span>
                                @endif
                                <br>
                                <input type="submit" value="Submit">
                                </form>
                            </section>
                        </div>

					</div>

            </div>

    </section>

@endsection