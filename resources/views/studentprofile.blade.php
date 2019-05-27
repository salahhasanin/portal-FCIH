   @extends('layouts.app3')
   @section('content')

     <section id="main" class="wrapper">
                <div class="container">
              

<table class="alt">
                <tr>
                    <th >Name</th>
                    <th >ID</th>
                    <th >GPA</th> 
                    <th >Credit Hours</th> 
                    <th >Start Date</th>
                    <th >Email</th>
                    <th >Birthdate</th>
                    <th >Address</th>
                    <th >Gender</th>
                    <th >Phone</th>
                </tr>
   @foreach($showProfile as $row)
             <tr>
                 <td>{{$row->full_name}}</td>
                 <td>{{$row->stu_id}}</td>
                 <td>{{$row->GPA}}</td>
                 <td>{{$row->Credit_hours}}</td>
                 <td>{{$row->start_date}}</td>
                 <td>{{$row->email}}</td>
                 <td>{{$row->birthdate}}</td>
                 <td>{{$row->address}}</td>
                 <td>{{$row->gender}}</td>
                 <td>{{$row->phone}}</td>
              </tr>
   @endforeach  
</table><br><br><br><th><th><th>
 </section>
@endsection