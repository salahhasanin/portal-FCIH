@extends('layouts.app3')

@section('content')
                   
            @foreach($data as $row)

            <br>
            
            <h3>Change password</h3>
            <form method="POST" action="{{ url('/editstuff/' . $row->stuff_id) }}">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <table>

            <tr>
                <td><input type="text" name="password"  placeholder="password">
                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif   
                </td>


                <td><input type="password" name="password_confirmation"  placeholder="Confirm new password" >
                </td>


                <td>
                        <button type="submit" name="pass">Change</button>
                </td>
            </tr>

        </table>

            </form>

            <br>

            <h3>Change informtion</h3>
            <form method="POST" action="{{ url('/editstuff/' . $row->stuff_id) }}"> 

                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <table>

                             <tr>
                             <td>Email</td>
                             <td><input type="text" name="email"  placeholder="email" value="{{ $row->email }}"></td></tr>


                             <tr>
                             <td>Address</td>
                             <td><input type="text" name="address"  placeholder="address" value="{{ $row->address }}"></td></tr>


                             <tr>
                             <td>Phone</td>
                             <td><input type="text" name="phone"  placeholder="phone" value="{{ $row->phone }}"></td></tr>

                             <tr>
                             <td>Salary</td>
                             <td><input type="text" name="salary"  placeholder="salary" value="{{ $row->salary }}">
                             </td></tr>

                             <tr>
                             <td>Work type</td>
                             <td><input type="text" name="work_type"  placeholder="Work type" value="{{ $row->work_type }}">
                             </td></tr>

                    </table>

                             <input style="float: right;" type="submit" value="edit">

                   @endforeach
      
            </form>
    
                                
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <br>
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                                <br>
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                <br>
                                @if ($errors->has('salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                @endif
                                    <br>
                                @if ($errors->has('work_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('work_type') }}</strong>
                                    </span>

                                @endif
    
   @endsection
