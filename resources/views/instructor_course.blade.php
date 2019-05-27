@extends('layouts.app3')
@section('content')
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		@if(isset($data))
			@foreach($data as $data)
			<tr>
				<form method='get' action="{{ url('/showRegisterdStudentCourse')}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<td>  <input type="submit" name="course_name" value="{{ $data->course_name }}"> </td>
				</form>
				
			</tr>	
			
			@endforeach
		@endif
	</table>

	<table>
		@if(isset($data2))
					<form id="myForm" metho="get" action="{{ url('/saveStudentPractical')}}">
			@foreach($data2 as $data2)
			<tr>
				<td>{{$data2->stu_id}}</td>
				<td>{{$data2->full_name}}</td>
				<td>
						<input type="hidden" name="_token"      value="{{ csrf_token() }}">
						<input type="hidden" name="stu_id[]"    value="{{$data2->stu_id}}">
						<input type="hidden" name="full_name[]" value="{{$data2->full_name}}">
						<input type="hidden" name="course_name" value="{{$course_name}}">
						<input type ="text"  name="practical[]"  pattern="^[0-9][0-0]?$|^10$" required/>
				</td>
			</tr>	
			@endforeach
	</table>
			<input type="submit" form="myForm" value="save">
					</form>
		@endif


</body>
</html>


@endsection