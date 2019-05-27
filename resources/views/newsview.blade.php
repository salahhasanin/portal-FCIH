@extends('layouts.app3')
@section('content')
    <section id="main" class="wrapper">
        <div class="container">

                 <form method="post" action="{{ url('/insertnews') }}"> 
                 
                                     <input  type="hidden" name="_token" value="{{ csrf_token() }}">

                                     

                                     <input style="background: #c4c7cc;height:50px" type="date" name="new_date"  placeholder="new_Date"><br><br><br>
                                  
                                     <input style="background: #c4c7cc;height:50px" type="text" name="new_title"  placeholder="New Title" ><br><br><br>
                                  
                                     <input style="background: #c4c7cc;height:50px" type="text" name="new_content"  placeholder="New Content"><br><br><br>
   
                                     <input type="submit" value="Add"><th><th><br>

                 </form> 

                               @if ($errors->has('new_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new_date') }}</strong>
                                    </span>
                                @endif
                                <br>
                                @if ($errors->has('new_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new_title') }}</strong>
                                    </span>
                                @endif
                                <br>
                                @if ($errors->has('new_content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new_content') }}</strong>
                                    </span>
                                @endif
        </div>
    </section>
    <!--
                  <header>
                     <h1>ALL NEWS</h1>
                  </header>

                           @if($allnews)       
                               @foreach($allnews as $row)
                            <article>
                               <h1>{{$row->new_title}}   </h1>
                               <p> {{$row->new_content}} </p>
                            </article>
                            @endforeach
                            @endif
                         -->
 @endsection