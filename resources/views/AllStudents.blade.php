   @extends('layouts.app3')
   @section('content')

     <section id="main" class="wrapper">
                <div class="container">


             <table class="alt">
                <tr>
                    
                    <th>Number of Students</th>
                </tr>
                 @foreach($studentRegister as $insta) 
                <tr>
                                    
                     <td> {{$insta->user_count}} </td>

                </tr>
                 @endforeach
               </table><br><br><br><th><th><th>


                   

                    <table class="alt">
                <tr>
                    
                    <th>StudentID</th>
                    <th>StudentName</th>
                </tr>
                 @foreach($studentsInCourse as $ins) 
                <tr>
                     <td> {{$ins->stu_id}} </td>               
                     <td> {{$ins->full_name}} </td>

                </tr>
                 @endforeach
               </table><br><br><br><th><th><th>
           

    
     </div>
     </section>
@endsection