
   @extends('layouts.app3')
   @section('content')

     <section id="main" class="wrapper">
                <div class="container">
              
<table class="alt">
                <tr>
                    <th>COURSE ID</th>
                    <th>COURSE NAME</th>
                    <th>Student No</th>
                    <th>attendance </th>
                    <th> abcents</th>
           
                </tr>
                 @foreach($courseForDoctor as $insta)
                <tr>
                     <td> {{$insta->id}}</td>
                     <td> {{$insta->course_name}}</td>
                     <td>
                     <form method="get" action='{{ url("AllStudents") }}'>
                                    <input type="hidden" name="insta" value="{{ $insta->id }}">
                                    <input type="submit">
                     </form>
                     </td>
                     

                </tr>
                     @endforeach
    
        </table>
     </div>
     </section>
@endsection
    
    <?php
//<a href="{{url('AllStudents/'.$insta->id)}}">
    ?>
