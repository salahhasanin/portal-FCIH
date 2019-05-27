@extends('layouts.app3')
@section('content')
<section id="main" class="wrapper">
@if(session()->has('message'))
    <div class="alert alert-success">
        <script type="text/javascript">alert('Done')</script>
    </div>
@endif
				<div class="container">
					<form method="POST" action="{{ url('submitfinal') }}">
{{ csrf_field() }}
					<table class="alt">	<tr>
		<td>
			ID
		</td>
		<td>
			Name
		</td>
		<td>
			Course name
		</td>
		<td>
			Course  code
		</td>
		<td>
			Class work
		</td>
		<td>
			Final Exam grade
		</td>

	</tr>
@foreach($students as $row)
		
	<tr>
		<td>
			<input type="text" name="stu_id[]" value="{{ $row->stu_id }}" placeholder="Course Name" readonly>
		</td>
		<td>
			{{ $row->full_name }}
		</td>
		<td>
			
			<input type="text" name="course_name[]" value="{{ $row->course_name }}" placeholder="Course Name" readonly>

		</td>
		<td>
			
			<input type="number" name="course_code[]" value="{{ $row->course_code }}" placeholder="Course Code" readonly>

		</td>
		<td>

			<input type="number" name="class_work[]" value="{{ $row->grades }}" placeholder="Class Work">

		</td>
		<td>

			<input type="number" name="final_exam[]" >

		</td>

		@endforeach
	</tr>
</table>
		<input type="hidden" name="count" value="{{ $no_of_rows }}">
		<input type="submit" style="float: right;">
	</form>
</div>
</section>
@endsection