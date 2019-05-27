@extends('layouts.app3')

@section('content')

                   
        @foreach($data as $row)
        <br>

          <h1>For changing password</h1>

            <form method="POST" action="{{ url('/editstudent/' . $row->stu_id) }}">

                     <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <table>

                   <tr>

                      <td>

                        <input type="password" name="password"  placeholder="password">

                        @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                        @endif

                      </td>

                      <td> 

                        <input type="password" name="password_confirmation"  placeholder="Confirm new password">

                      </td>

                      <td>

                        <button type="submit" name="pass">Change</button>

                      </td>

                  </tr>

                </table>

            </form>

          <h1>For changing Information</h1>

            <form method="POST" action="{{ url('/editstudent/' . $row->stu_id) }}"> 
                             <input type="hidden" name="_token" 
                             value="{{ csrf_token() }}">
               <table>

                        <tr>
                        <td>Email</td>  
                        <td> <input type="text" name="email"  placeholder="email" 
                              value="{{ $row->email }}">
                                @if ($errors->has('email'))

                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </td>
                          </tr>


                        <tr>
                        <td>Address</td>
                        <td> <input type="text" name="address"  placeholder="address"      value="{{ $row->address }}">
                          @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                        </td>
                      </tr>

                      <tr>
                        <td>Credit hours</td>
                        <td> <input type="number" name="credit_hours"  placeholder="credit_hours"      value="{{ $row->Credit_hours }}">
                          @if ($errors->has('credit_hours'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('credit_hours') }}</strong>
                                    </span>
                                @endif
                        </td>
                      </tr>


                        <tr>
                        <td>Phone</td>
                        <td> <input type="text" name="phone"  placeholder="phone" 
                              value=" {{ $row->phone }}">

                                                              @if ($errors->has('phone'))
                                                               <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </td>
                          </tr>



                        <tr>
                        <td>GPA</td>
                        <td> <input type="text" name="GPA" placeholder="GPA" 
                             value="{{$row->GPA}}">
                                                             @if ($errors->has('GPA'))

                                                             <span class="help-block">
                                        <strong>{{ $errors->first('GPA') }}</strong>
                                    </span>
                                @endif              
                           </td>
                         </tr>


                        <tr>
                        <td>Transcript</td>
                        <td> <input type="text" name="transcript" placeholder="transcript" value="{{$row->transcript}}">
                                                          @if ($errors->has('transcript'))
                                                           <span class="help-block">
                                        <strong>{{ $errors->first('transcript') }}</strong>
                                    </span>
                                @endif
                        </td>
                      </tr>

                      <tr>
                        <td>Level</td>  
                        <td> <select name="level">
                                <option value="1">level 1</option>
                                <option value="2">level 2</option>
                                <option value="3">level 3</option>
                                <option value="4">level 4</option>
                             </select>
                            </td>
                          </tr>


                
                </table>
                             <input type="submit" value="edit">
                           
            </form>
    
         @endforeach
                                
                              
                                   
    
    @endsection
