@extends('layouts.app2')

@section('content')
                    
                    @if(Auth::check())
                    @if(Auth::user()->userType == 'admin')
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
                            <a href="{{ url('test') }}"><i class="icon big rounded color1 fa fa-search"></i>
								<h2>Seacrh for users</h2></a>
							</section>
                        </div>
                        <!-------------------------!-->
						<div class="4u 12u$(medium)">
							<section class="box">
                            <a href="{{ url('test3') }}"><i class="icon big rounded color1 fa fa-money"></i>
								<h2>Show who payed</h2></a>
							</section>
                        </div>
                        <!-------------------------!-->
                        <div class="4u 12u$(medium)">
                            <section class="box">
                            <a href="{{ url('test3') }}"><i class="icon big rounded color1 fa fa-bar-chart"></i>
                                <h2>Show student charts</h2></a>
                            </section>
                        </div>

                    </div>

                    <!-------------------------!-->

                    <div class="row 150%">

						<div class="4u 12u$(medium)">
							<section class="box">
                            <i class="icon big rounded color1 fa fa-user"></i>
                                <h2>ADD new user</h2>
                                <form method="get" action='{{ url("register") }}'>
                                <select style="height: 40px;background: #c4c7cc" name='add_user'>
                                    <option value='doctor'>Doctor</option>
                                    <option value='student'>Student</option>
                                    <option value='instructor'>Instructor</option>
                                    <option value='stuff'>Stuff</option>
                                </select>
                                <br>
                                <input type="submit" value="Submit">
                                </form>
                            </section>
                        </div>

                            <!-------------------------!-->

                        <div class="4u 12u$(medium)">
                            <section class="box">
                            <i class="icon big rounded color1 fa fa-cog"></i>
                                <h2>Manage Users</h2>
                                <form method="get" action='{{ url("showUserInfo") }}'>
                                <select style="height: 40px;background: #c4c7cc" name='manage_user'>
                                    <option value='doctor'>Doctor</option>
                                    <option value='student'>Student</option>
                                    <option value='instructor'>Instructor</option>
                                    <option value='stuff'>Stuff</option>
                                </select>
                                <br>
                                <input type="submit" value="Submit">
                                </form>
                            </section>
                        </div>

                        <!-------------------------!-->

                        <div class="4u 12u$(medium)">
                            <section class="box">
                            <i class="icon big rounded color1 fa fa-envelope-o"></i>
                                <h2>Send Emails</h2>
                                <form method="get" action='{{ url("showUserInfo") }}'>
                                <select style="height: 40px;background: #c4c7cc" name='manage_user'>
                                    <option value='doctor'>Doctor</option>
                                    <option value='student'>Student</option>
                                    <option value='instructor'>Instructor</option>
                                    <option value='stuff'>Stuff</option>
                                </select>
                                <br>
                                <input type="submit" value="Submit">
                                </form>
                            </section>
                        </div>

					</div>

            </div>

    </section>  
                @else
                <script type="text/javascript">
                    window.location = "{{ url('login') }}";//here double curly bracket
                </script>
                @endif
                @else
                <script type="text/javascript">
                    window.location = "{{ url('home') }}"; //here double curly bracket
                </script>;
                @endif
@endsection