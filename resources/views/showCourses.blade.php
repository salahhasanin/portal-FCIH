   @extends('layouts.app3')
   @section('content')

     <section id="main" class="wrapper">
                <div class="container">
              
<table class="alt">
                <tr>
                    <th >CODE</th>
                    <th >COURSENAME</th>
                    <th >PREREQUISTE</th> 
                    <th >HOURS</th>   
                </tr>
                 @foreach($coursesDetails as $row)
                     <tr>
                     <td> {{$row->course_code}}</td>
                     <td> {{$row->course_name}}</td> 
                     <td> {{$row->prerequisite_course}}</td> 
                     <td> {{$row->course_hour}}</td> 
                     </tr>
                 @endforeach
         </table><br><br><br><th><th><th>
     </section>
@endsection