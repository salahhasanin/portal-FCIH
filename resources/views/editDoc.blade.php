@extends('layouts.app3')

@section('content')

                 @foreach($data as $row)
                 <br>
                  <h3>Change password</h3>
                <form method="post" action="{{ url('/edit/'. $row->doc_id) }}">

                  <table>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <tr>
                          <td><input type="password" name="password"  placeholder="New password" >
                          </td>
                      
                          
                          <td><input type="password" name="password_confirmation"  placeholder="Confirm new password" >
                          </td>
                        </tr>
                          @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                          @endif
                  </table>                                
                        <button type="submit" name="pass">Change</button>

                </form>

                  <br>
                  
                <h3>Change informtion</h3>        
                <form method="post" action="{{ url('/edit/'. $row->doc_id) }}"> 
                  <table>
                                     <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                     <tr>
                                     <td>Email</td>
                                     <td><input type="email" name="email"  placeholder="email" value="{{ $row->email }}">
                                      @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                      @endif
                                    </td>
                                    </tr>

                                    <tr>
                                    <td>Address</td>
                                    <td><input type="text" name="address"  placeholder="address" value="{{ $row->address }}">
                                      @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                      @endif
                                    </td>
                                    </tr>

                                    <tr>
                                    <td>Phone</td>
                                    <td><input type="number" name="phone"  placeholder="phone" value="{{ $row->phone }}">
                                      @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                      @endif
                                    </td>
                                    </tr>

                                    <tr>
                                    <td>Salary</td>  
                                    <td><input type="number" name="salary"  placeholder="salary" value="{{ $row->salary }}">
                                      @if ($errors->has('salary'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('salary') }}</strong>
                                        </span>
                                     @endif
                                    </td>
                                    </tr>
                        </table>            
                      <input style="" type="submit" value="edit" name="pass">

                </form>

                          
                          

                          @endforeach
   @endsection
