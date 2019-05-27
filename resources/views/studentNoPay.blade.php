@extends('layouts.app3')
@section('content')
    <section id="main" class="wrapper">
        <div class="container">

                    <table>
                <tr>
                    <th>ID</th>
                    <th >Name</th>
                    <th >Email</th>
                    <th>Phone</th>
                    <th >Start_date</th>
                    <th >studentpay</th>
                    
                </tr>
                 @foreach($nopay as $no)
                     <tr>
                     <td> {{$no->stu_id}}</td>
                     <td> {{$no->full_name}}</td> 
                     <td> {{$no->email}}</td>
                     <td> {{$no->phone}}</td>
                     <td> {{$no->start_date}}</td>
                     <td>
                       <a href="{{url('del/news/'.$no->stu_id)}}">pay</a>
                  
                  </td>
                     </tr>
                 @endforeach
               </table><br><br><br><br><br><br><br><br><br><br>
        </div>
    </section>
@endsection
