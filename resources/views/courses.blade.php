@extends('layouts.app3')
@section('content')

<section id="main" class="wrapper">
				<div class="container">
					<div class="table-wrapper">
						
<table class="alt">
	<tr>
		<td>Course Code</td>
		<td>Course Name</td>
		<td>prerequisite</td>
	</tr>
	<tr>
	@foreach($course_info as $row)
		<td>{{ $row->course_code          }}</td>
		<td>{{ $row->course_name          }}</td>
		<td>{{ $row->prerequisite_course  }}</td>
	</tr>
		@endforeach

</table>
</div>
<br>

<h3>New Course</h3>
<form method="post" action="{{ url('submitCourse') }}" >

	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">	

	<input type="number"   style="background: #c4c7cc;height:50px" name="course_code" value="{{ old('course_code') }}" placeholder="Course code">
	<br>
	@if ($errors->has('course_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('course_code') }}</strong>
                                    </span>
                                @endif
    <br>
	<input type="text" style="background: #c4c7cc;height:50px" name="course_name" value="{{ old('course_name') }}" placeholder="Course Name">
	<br>
	@if ($errors->has('course_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('course_name') }}</strong>
                                    </span>
                                @endif
    <br>
	<select style="background: #c4c7cc;height:50px" name="prerequisite_course">
		<option value="" disabled selected>prerequisite course</option>
		<option value="no">No prerequisite course</option>
		@foreach($prerequisite as $data)
		<option value="{{ $data->course_name }}">{{ $data->course_name }}</option>
		@endforeach
	</select>

	<input type="hidden"   name="dept_id" value="{{ app('request')->input('department') }}">
	<br>
	<input type="submit" value="Add">

</form>

</div>
</section>
@endsection