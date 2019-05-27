@extends('layouts.app3')

@section('content')
<center>
 <form method="get" action={{ url('/test2') }}>
 <br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <table style="width:100px">
            <tr>
                <td><input style="width:200px" type="text" name="id" placeholder="Enter ID"></td>
                <td><input type="submit" value="show"></td>
            </tr>
        </table>
         <br>
        @if(session()->has('message'))
        <h1 style="color:red">{{ session()->get('message') }}</h1>
        @endif
    </form>
    </center>
    @if(isset($data))
        @if($data->table == 'students')
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>BirthDate</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>phone</th>
                    <th>GBA</th>
                    <th>Credit Hours</th>
                </tr>

                <tr>
                    <td> {{$data->stu_id}}       </td>
                    <td> {{$data->full_name}}    </td>
                    <td> {{$data->birthdate}}    </td>
                    <td> {{$data->email}}        </td>
                    <td> {{$data->address}}      </td>
                    <td> {{$data->gender}}       </td>
                    <td> {{$data->phone}}        </td>
                    <td> {{$data->GPA}}          </td>
                    <td> {{$data->Credit_hours}} </td>
                </tr>           
            </table>
        @endif
        @if($data->table == 'instructors')
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>BirthDate</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>phone</th>
                    <th>salary</th>
                </tr>

                <tr>
                    <td> {{$data->inst_id}}   </td>
                    <td> {{$data->full_name}} </td>
                    <td> {{$data->birthdate}} </td>
                    <td> {{$data->email}}     </td>
                    <td> {{$data->address}}   </td>
                    <td> {{$data->gender}}    </td>
                    <td> {{$data->phone}}     </td>
                    <td> {{$data->salary}}    </td>
                </tr>           
            </table>
            @endif
        @if($data->table == 'stuffs')
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>BirthDate</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>phone</th>
                    <th>salary</th>
                </tr>

                <tr>
                    <td> {{$data->stuff_id}}   </td>
                    <td> {{$data->full_name}} </td>
                    <td> {{$data->birthdate}} </td>
                    <td> {{$data->email}}     </td>
                    <td> {{$data->address}}   </td>
                    <td> {{$data->gender}}    </td>
                    <td> {{$data->phone}}     </td>
                    <td> {{$data->salary}}    </td>
                </tr>           
            </table>
        @endif
        @if($data->table == 'doctors')
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>BirthDate</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>phone</th>
                    <th>salary</th>
                </tr>

                <tr>
                    <td> {{$data->doc_id}}   </td>
                    <td> {{$data->full_name}} </td>
                    <td> {{$data->birthdate}} </td>
                    <td> {{$data->email}}     </td>
                    <td> {{$data->address}}   </td>
                    <td> {{$data->gender}}    </td>
                    <td> {{$data->phone}}     </td>
                    <td> {{$data->salary}}    </td>
                </tr>           
            </table>
        @endif

    @endif  
<br><br><br><br><br><br><br><br>

@endsection