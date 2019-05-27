@extends('layouts.app3')

@section('content')



                 @if ( app('request')->input('add_user') == 'doctor' && Auth::check())
                    <form class="form-horizontal" method="POST" action="{{ url('doctor') }}">

                <table>
                 <tr>

                        {{ csrf_field() }}
                            <!-- ID -->
                            <td>

                                <label for="email" class="col-md-4 control-label">ID</label>

                                <input style="background: #c4c7cc" id="email" type="text" class="form-control" name="id" value="{{ old('id') }}" required>
                                <br>

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </td>
                            <!-- name -->
                            <td>

                                <label for="name" class="col-md-4 control-label">Name</label>

                                <input style="background: #c4c7cc" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                <br>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </td>
                        <!-- email -->
                            <td>

                                <label for="email" class="col-md-4 control-label">Email</label>

                                <input style="background: #c4c7cc" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                <br>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </td>
                 </tr>
                 <tr>

                        <!-- password -->
                            <td>

                                <label for="password" class="col-md-4 control-label">Password</label>

                                <input style="background: #c4c7cc" id="password" type="password" class="form-control" name="password" required>
                                <br>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </td>
                        <!-- Confirm password -->
                            <td>

                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <input style="background: #c4c7cc" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </td>
                        <!-- Address -->
                            <td>
                        
                                <label for="Address" class="col-md-4 control-label">Address</label>

                                <input style="background: #c4c7cc" id="Address" type="text" class="form-control" name="address" value="{{ old('Address') }}" required autofocus>
                                <br>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </td>
                 </tr>
                        <!-- gender -->
                 <tr>
                            <td>
                        
                                <label for="gender" class="col-md-4 control-label">Gender</label>
                                <input  style="background: #c4c7cc" id="gender-male" type="radio" name="gender" 
                                value="male" required autofocus id="gender-male"/>
                                <label for="gender-male"> Male</label>
                                <input  id="gender-female" type="radio" name="gender"
                                value="female" required autofocus id="gender-female"/>
                                <label for="gender-female"> Female</label>      
                                <br>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </td>
                        <!-- phone -->
                            <td>

                                <label for="phone" class="col-md-4 control-label">phone</label>

                                <input style="background: #c4c7cc" id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>
                                <br>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </td>
                        <!-- salary -->
                            <td>

                                <label for="salary" class="col-md-4 control-label">Salary</label>

                                <input style="background: #c4c7cc" id="salary" type="text" class="form-control" name="salary" value="{{ old('salary') }}" required autofocus>
                                <br>

                                @if ($errors->has('salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                @endif
                            </td>
                 </tr>
                        <!-- BirthDate -->
                 <tr>
                            <td>
        
                                <label for="birthdate" class="col-md-4 control-label">Birthdate</label>

                                <input style="background: #c4c7cc;height: 40px" id="birthdate" type="date" class="form-control" name="birthdate" value="{{ old('birthdate') }}" required autofocus>
                                                                <br>

                                @if ($errors->has('birthdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif
                            </td>
                        <!-- HireDate -->
                            <td>

                                <label for="hiredate" class="col-md-4 control-label">HireDate</label>

                                <input style="background: #c4c7cc;height: 40px" id="hiredate" type="date" class="form-control" name="hiredate" value="{{ old('hiredate') }}" required autofocus>
                                <br>
                                @if ($errors->has('hiredate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hiredate') }}</strong>
                                    </span>
                                @endif
                            </td>
                            <td> <label for="hiredate"></label>
                               
                                <input type="submit" value="Add" class="special" />
                            </td>
                     </tr>
            </table>

                    </form>
                </div>

                 @elseif (app('request')->input('add_user') == 'instructor' && Auth::check())

                    <form class="form-horizontal" method="POST" action="{{ url('instructor') }}">
                        {{ csrf_field() }}



<table>
<tr>
                        <!-- ID -->
                      
                      <td>
                      
                            <label for="email" class="col-md-4 control-label">ID</label>

                                <input style="background: #c4c7cc" id="email" type="number" class="form-control" name="id" value="{{ old('id') }}" required>

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                      </td>    
                        <!-- NAME -->

                        <td>
                            
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <input style="background: #c4c7cc" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                           </td>

                        <!-- email -->
                        

                        <td>
                            
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <input style="background: #c4c7cc" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                       </td>
                       
</tr>
                        <!-- password -->
    <tr>                   
                        <td>
                            
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <input style="background: #c4c7cc" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </td>



                        <td> 

                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <input style="background: #c4c7cc" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </td>
                        <!-- Address -->

                         <td>          

                            <label for="Address" class="col-md-4 control-label">Address</label>

                            <input style="background: #c4c7cc" id="Address" type="text" class="form-control" name="address" value="{{ old('Address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                         </td>
            </tr>
                        <!-- gender -->
            <tr>
                        <td>
                            <label for="gender" class="col-md-4 control-label">Gender</label>
                            <input  id="gender-male" type="radio" name="gender" 
                            value="male" required autofocus id="gender-male"/>
                            <label for="gender-male"> Male</label>
                            <input  id="gender-female" type="radio" name="gender"
                            value="female" required autofocus id="gender-female"/>
                            <label for="gender-female"> Female</label>      

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                        </td>
                        <!-- phone -->
                        <td>

                            <label for="phone" class="col-md-4 control-label">phone</label>

                            <input style="background: #c4c7cc" id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                          
                        </td>
                        <!-- salary -->
                        <td>

                            <label for="salary" class="col-md-4 control-label">Salary</label>

                            <input style="background: #c4c7cc" id="salary" type="number" class="form-control" name="salary" value="{{ old('salary') }}" required autofocus>

                                @if ($errors->has('salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                @endif
                        </td>
    </tr>
                        <!-- BirthDate -->
    <tr>
                        <td>

                            <label for="birthdate" class="col-md-4 control-label">Birthdate</label>

                            <input style="background: #c4c7cc;height: 40px" id="birthdate" type="date" class="form-control" name="birthdate" value="{{ old('birthdate') }}" required autofocus>

                                @if ($errors->has('birthdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif
                            
                        </td>
                        <!-- HireDate -->
                        <td>

                            <label for="hiredate" class="col-md-4 control-label">HireDate</label>

                            <input style="background: #c4c7cc;height: 40px" id="hiredate" type="date" class="form-control" name="hiredate" value="{{ old('hiredate') }}" required autofocus>

                                @if ($errors->has('hiredate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hiredate') }}</strong>
                                    </span>
                                @endif
                           

                        </td>

                        <td>
                                <input type="submit" value="Add" class="special" />
                        </td>
                    </tr>
                </table>
                    </form>
                    @if($errors == NULL)
                    <script type="text/javascript">
                     window.alert("registertion is done");
                    </script>;
                    @endif
                </div>

                 @elseif (app('request')->input('add_user') == 'student' && Auth::check())


<table>
       <tr>                 <!-- studnet -->

<td>
                    <form class="form-horizontal" method="POST" action="{{ url('student') }}">
                        {{ csrf_field() }}

                            <label for="email" class="col-md-4 control-label">ID</label>

                                <input style="background: #c4c7cc;height: 40px" id="email" type="number" class="form-control" name="id" value="{{ old('id') }}" required>

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                           
</td>

                           
<td>
                            <label for="name" class="col-md-4 control-label">Name</label>

                                <input style="background: #c4c7cc;height: 40px" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
    </td>                       

                        <!-- email -->
                        <td>
                            <label for="email" class="col-md-4 control-label">Email</label>

                                <input style="background: #c4c7cc;height: 40px" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                          </td>
</tr>


                        <tr><!-- password -->
                        <td>
                            <label for="password" class="col-md-4 control-label">Password</label>

                                <input style="background: #c4c7cc;height: 40px" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           </td>


<td>
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <input style="background: #c4c7cc;height: 40px" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
</td>
                        <!-- Address -->
<td>
                            <label for="Address" class="col-md-4 control-label">Address</label>

                                <input style="background: #c4c7cc;height: 40px" id="Address" type="text" class="form-control" name="address" value="{{ old('Address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                          </td>
</tr>
                   <!-- gender -->
                   <tr>
                        <td>
                            <label for="gender" class="col-md-4 control-label">Gender</label>
                        <input  style="background: #c4c7cc;height: 40px" id="gender-male" type="radio" name="gender" 
                        value="male" required autofocus id="gender-male"/>
                        <label for="gender-male"> Male</label>
                        <input  style="background: #c4c7cc;height: 40px" id="gender-female" type="radio" name="gender"
                        value="female" required autofocus id="gender-female"/>
                        <label for="gender-female"> Female</label>      

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                           </td>

    <td>
                        <!-- phone -->
                            <label for="phone" class="col-md-4 control-label">phone</label>

                                <input style="background: #c4c7cc;height: 40px" id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </td>


                       
                        <!-- BirthDate -->
                        <td>
                            <label for="birthdate" class="col-md-4 control-label">Birthdate</label>

                                <input style="background: #c4c7cc;height: 40px" id="birthdate" type="date" class="form-control" name="birthdate" value="{{ old('birthdate') }}" required autofocus>

                                @if ($errors->has('birthdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif
                           </td>
</tr>
<!-- startDate -->
<tr>
<td>
                            <label for="start_date" class="col-md-4 control-label">StartDate</label>

                                <input style="background: #c4c7cc;height: 40px" id="start_date" type="date" class="form-control" name="start_date" value="{{ old('start_date') }}" required autofocus>

                                @if ($errors->has('start_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
                          </td>




                        <!-- GPA -->
                        <td>
                            <label for="GPA" class="col-md-4 control-label">GPA</label>

                                <input style="background: #c4c7cc;height: 40px" id="GPA" type="text" class="form-control" name="GPA" value="{{ old('GPA') }}" required autofocus>

                                @if ($errors->has('GPA'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('GPA') }}</strong>
                                    </span>
                                @endif
                           </td>

                        <!-- Transcript -->

<td>
                            <label for="trancript" class="col-md-4 control-label">Transcript</label>

                                <input style="background: #c4c7cc;height: 40px" id="transcript" type="text" class="form-control" name="transcript" value="{{ old('transcript') }}" required autofocus>

                                @if ($errors->has('transcript'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('transcript') }}</strong>
                                    </span>
                                @endif
                            </td>

</tr>

                        <!-- Credit_hours -->

<tr>
<td>
                            <label for="Credit_hours" class="col-md-4 control-label">Credit_hours</label>

                                <input style="background: #c4c7cc;height: 40px" id="Credit_hours" type="number" class="form-control" name="Credit_hours" value="{{ old('Credit_hours') }}" required autofocus>

                                @if ($errors->has('Credit_hours'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Credit_hours') }}</strong>
                                    </span>
                                @endif
                           </td>



                        <!-- Payment -->


<td>
                            <label for="payment" class="col-md-4 control-label">Payment</label>

                                 <select style="background: #c4c7cc;height: 40px" name="payment" required autofocus>

                                      <option value="1">yes</option>
                                      <option value="0">no</option>

                                </select> 

                                @if ($errors->has('payment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('payment') }}</strong>
                                    </span>
                                @endif
                           </td>


    <td>
                                <input type="submit" value="Add" class="special" />

                           </td>
                       </tr>
                   </table>
                    </form>
                    @if($errors == NULL)
                    <script type="text/javascript">
                     window.alert("registertion is done");
                    </script>;
                    @endif
                </div>

                 @elseif (app('request')->input('add_user') == 'stuff' && Auth::check())

                        
                        <!-- stuff -->


                        <table>
                 <tr>

                        {{ csrf_field() }}
                            <!-- ID -->
                            <td>

                                <label for="email" class="col-md-4 control-label">ID</label>

                                <input style="background: #c4c7cc" id="email" type="text" class="form-control" name="id" value="{{ old('id') }}" required>
                                <br>

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </td>
                            <!-- name -->
                            <td>

                                <label for="name" class="col-md-4 control-label">Name</label>

                                <input style="background: #c4c7cc" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                <br>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </td>
                        <!-- email -->
                            <td>

                                <label for="email" class="col-md-4 control-label">Email</label>

                                <input style="background: #c4c7cc" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                <br>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </td>
                 </tr>
                 <tr>

                        <!-- password -->
                            <td>

                                <label for="password" class="col-md-4 control-label">Password</label>

                                <input style="background: #c4c7cc" id="password" type="password" class="form-control" name="password" required>
                                <br>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </td>
                        <!-- Confirm password -->
                            <td>

                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <input style="background: #c4c7cc" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </td>
                        <!-- Address -->
                            <td>
                        
                                <label for="Address" class="col-md-4 control-label">Address</label>

                                <input style="background: #c4c7cc" id="Address" type="text" class="form-control" name="address" value="{{ old('Address') }}" required autofocus>
                                <br>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </td>
                 </tr>
                        <!-- gender -->
                 <tr>
                            <td>
                        
                                <label for="gender" class="col-md-4 control-label">Gender</label>
                                <input  style="background: #c4c7cc" id="gender-male" type="radio" name="gender" 
                                value="male" required autofocus id="gender-male"/>
                                <label for="gender-male"> Male</label>
                                <input  id="gender-female" type="radio" name="gender"
                                value="female" required autofocus id="gender-female"/>
                                <label for="gender-female"> Female</label>      
                                <br>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </td>
                        <!-- phone -->
                            <td>

                                <label for="phone" class="col-md-4 control-label">phone</label>

                                <input style="background: #c4c7cc" id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>
                                <br>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </td>
                        <!-- salary -->
                            <td>

                                <label for="salary" class="col-md-4 control-label">Salary</label>

                                <input style="background: #c4c7cc" id="salary" type="text" class="form-control" name="salary" value="{{ old('salary') }}" required autofocus>
                                <br>

                                @if ($errors->has('salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                @endif
                            </td>
                 </tr>
                       
                        <tr><!-- BirthDate -->
                        <td>
                            <label for="birthdate" class="col-md-4 control-label">Birthdate</label>

                                <input style="background: #c4c7cc;height: 40px" id="birthdate" type="date" class="form-control" name="birthdate" value="{{ old('birthdate') }}" required autofocus>

                                @if ($errors->has('birthdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif
                           </td>




                      
                        <!-- HireDate -->
                      <td>
                            <label for="hire_date" class="col-md-4 control-label">HireDate</label>

                                <input style="background: #c4c7cc;height: 40px" id="hire_date" type="date" class="form-control" name="hire_date" value="{{ old('hire_date') }}" required autofocus>

                                @if ($errors->has('hire_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hire_date') }}</strong>
                                    </span>
                                @endif
                          </td>




     
<!-- work_type -->
    <td>

                            <label for="work_type" class="col-md-4 control-label">Work type</label>

                                 <select style="background: #c4c7cc;height: 40px" name="work_type" required autofocus>
                                  <option value="student_affairs">Student Affairs</option>
                                  <option value="admin">admin</option>
                                  <option value="supervisor">supervisor</option>
                                </select> 
                   
                                @if ($errors->has('work_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('work_type') }}</strong>
                                    </span>
                                @endif
                           </td>
                       </tr>
                       <tr>
                        <td></td>
                           <td><center>
                                                                <input type="submit" value="Add" class="special" />
                                </center>
                           </td>
                       </tr>
                   </table>
                    </form>
                    @if($errors == NULL)
                    <script type="text/javascript">
                     window.alert("registertion is done");
                    </script>;
                    @endif
                </div>


                
                @else 
                <script type="text/javascript">
                    window.location = "{{ url('home') }}"; //here double curly bracket
                </script>;
                @endif
                
            </div>
        </div>
    </div>
</div>
@endsection


 