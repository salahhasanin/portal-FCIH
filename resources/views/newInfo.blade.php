@extends('layouts.app3')

@section('content')

            @if ( app('request')->input('manage_user') == 'instructor' && Auth::check())
                   
                   <br>
                    <table>

                        <tr>

                            <th>ID</th>
                            <th >Name</th>
                            <th >Birthdate</th>
                            <th >Email</th>
                            <th >Address</th>
                            <th >Gender</th>
                            <th >Phone</th>
                            <th >Salary</th>
                            <th >HireDate</th>
                            <th >E-Button</th>
                            
                        </tr>

                        @foreach($allinst as $insta)

                        <tr>

                            <td> {{$insta->inst_id}}</td>
                            <td> {{$insta->full_name}}</td> 
                            <td> {{$insta->birthdate}}</td> 
                            <td> {{$insta->email}}</td> 
                            <td> {{$insta->address}}</td>
                            <td> {{$insta->gender}}</td>
                            <td> {{$insta->phone}}</td>
                            <td> {{$insta->salary}}</td>
                            <td> {{$insta->hire_date}}</td>
                            <td>
                                <form method="get" action='{{ url("editins") }}'>
                                    <input type="hidden" name="insta" value="{{ $insta->inst_id }}">
                                    <input type="submit">
                                </form>
                            </td>
                     
                        </tr>

                        @endforeach

               </table>



            @elseif ( app('request')->input('manage_user') == 'doctor' && Auth::check())



                <br>
                <table>

                    <tr>
                            <th>ID</th>
                            <th >Name</th>
                            <th >Birthdate</th>
                            <th >Email</th>
                            <th >Address</th>
                            <th >Gender</th>
                            <th >Phone</th>
                            <th >Salary</th>
                            <th >HireDate</th>
                            <th >E-Button</th>
                            
                    </tr>

                        @foreach($alldoc as $news)

                    <tr>

                             <td> {{$news->doc_id}}</td>
                             <td> {{$news->full_name}}</td> 
                             <td> {{$news->birthdate}}</td> 
                             <td> {{$news->email}}</td> 
                             <td> {{$news->address}}</td>
                             <td> {{$news->gender}}</td>
                             <td> {{$news->phone}}</td>
                             <td> {{$news->salary}}</td>
                             <td> {{$news->hire_date}}</td>
                             <td><form method="get" action='{{ url("editDoctor") }}'>
                                    <input type="hidden" name="doctor" value="{{ $news->doc_id }}">
                                    <input type="submit">
                                </form></td>

                    </tr>

                        @endforeach

               </table>

     


            @elseif ( app('request')->input('manage_user') == 'stuff' && Auth::check())


              <br>
              <table>

                   <tr>  

                            <th>ID</th>
                            <th >Name</th>
                            <th >Birthdate</th>
                            <th >Email</th>
                            <th >Address</th>
                            <th >Gender</th>
                            <th >Phone</th>
                            <th >Salary</th>
                            <th >Hire_date</th>
                            <th >Work_type</th>
                            <th >E-Button</th>
                            
                            
                    </tr>

                         @foreach($allstaff as $stuffnews)

                    <tr>

                             <td> {{$stuffnews->stuff_id}}</td>
                             <td> {{$stuffnews->full_name}}</td> 
                             <td> {{$stuffnews->birthdate}}</td> 
                             <td> {{$stuffnews->email}}</td> 
                             <td> {{$stuffnews->address}}</td>
                             <td> {{$stuffnews->gender}}</td>
                             <td> {{$stuffnews->phone}}</td>
                             <td> {{$stuffnews->salary}}</td>
                             <td> {{$stuffnews->hire_date}}</td>
                             <td> {{$stuffnews->work_type}}</td>
                             <td><form method="get" action='{{ url("editStuff") }}'>
                                    <input type="hidden" name="stuff" value="{{ $stuffnews->stuff_id }}">
                                    <input type="submit">
                                </form></td>
                             
                    </tr>
                        @endforeach
              </table> 



            @elseif ( app('request')->input('manage_user') == 'student' && Auth::check())

             <br>
             <table>

                    <tr>

                            <th>ID</th>
                            <th >Name</th>
                            <th >Birthdate</th>
                            <th >Email</th>
                            <th >Address</th>
                            <th >Gender</th>
                            <th >Phone</th>
                            <th >GPA</th>
                            <th >Payment</th>
                            <th >Start_date</th>
                            <th >Transcript</th>
                            <th >E-Button</th>
                            
                    </tr>

                         @foreach($allstu as $stunews)

                    <tr>
                             <td> {{$stunews->stu_id}}</td>
                             <td> {{$stunews->full_name}}</td> 
                             <td> {{$stunews->birthdate}}</td> 
                             <td> {{$stunews->email}}</td> 
                             <td> {{$stunews->address}}</td>
                             <td> {{$stunews->gender}}</td>
                             <td> {{$stunews->phone}}</td>
                             <td> {{$stunews->GPA}}</td>
                             <td> {{$stunews->payment}}</td>
                             <td> {{$stunews->start_date}}</td>
                             <td> {{$stunews->transcript}}</td>
                             <td><form method="get" action='{{ url("editstuden") }}'>
                                    <input type="hidden" name="student" value="{{ $stunews->stu_id }}">
                                    <input type="submit">
                                </form></td>
                               
                    </tr>

                         @endforeach

             </table>

            @endif
                
@endsection
