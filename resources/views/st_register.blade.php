@extends('layouts.app3')
@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        <script type="text/javascript">alert('Register Done Succesfully')</script>
    </div>
@endif
<script type="text/javascript">
$(document).ready(function () {
    $('#checkBtn').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must check the course");
        return false;
      }

    });
});

</script>
<section id="main" class="wrapper">
<div class="container">
<table>
	<tr>
		<td>Course code</td>
		<td>Course name</td>
		<td>Select</td>
	</tr>
	<div class="row uniform 50%">
	<form method="post" action="{{ url('submit_stu_course') }}">
	@foreach($opened_courses as $row)
	<tr>
			{{ csrf_field() }}
		<td>{{ $row->course_code }}</td>
		<td>{{ $row->course_name }}</td>
		<td>						
				<section>	
								
						<div class="6u 12u$(3)">
							<input type="checkbox" id="{{ $row->course_code }}" name="{{$checks,$checks++}}">
							<label for="{{ $row->course_code }}"></label>
						</div>
				</section>

							<input type="hidden" value="{{ $row->id }}" name="course_id[]">
		</td>

	</tr>
	@endforeach
	</div>
</table>
<input type="hidden" value="{{ $no_course }}" name="no_course">
<input style="float: right" type="submit" id="checkBtn">
</form>
@if(session()->has('preq_fail'))
        <h1 style="color:red">{{ session()->get('preq_fail') }}</h1>
 @endif
</div>
</section>

@endsection