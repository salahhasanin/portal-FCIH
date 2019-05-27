@extends('layouts.app3')
@section('content')

<style>
    .tight-gutter {
        padding: 0 2px;
    }
</style>
@if(session()->has('message1'))
    <div class="alert alert-success">
        <script type="text/javascript">alert('Courses opened Succesfully')</script>
    </div>
@endif
<section id="main" class="wrapper">
<div class="container">
<form method="post" action="{{ url ('submitRegister') }} ">
	{{ csrf_field() }} 
<h2>Choose the Level</h2>
<select style="background: #c4c7cc;width: 500px;height: 40px;" name="level">
	<option value="1">Level 1</option>
	<option value="2">Level 2</option>
	<option value="3">Level 3</option>
	<option value="4">Level 4</option>
</select>
<br>
<h2>Choose the Semester</h2>
<select style="background: #c4c7cc;width: 500px;height: 40px;" name="semester">
	<option value="1">Semester 1</option>
	<option value="2">semester 2</option>
</select>
<br><br><br>

<div  class="row" style="padding-left: 50px;border: grey solid">
	<br><br>
@for($i=0;$i<$no_of_fields;$i++)
@if($i==2)
<br><br>
@endif
@if($i==4)
<br><br>
@endif
@if($i==6)
<br><br>
@endif
@if($i==8)
<br><br>
@endif
@if($i==10)
<br><br>
@endif
<div class="col-sm-4 tight-gutter"><input placeholder="Course {{ $i+1 }}" style="background: #c4c7cc;" list="course" name="course[]" autocomplete="off" type="text" required></div>
<datalist id="course">
	@foreach($coursesNames as $row)
	<option value="{{ $row->course_name }}"></option>
	@endforeach
</datalist>

@foreach($doctorNames as $rowD)
<select style="background: #c4c7cc;height:41px;width:190px;" name="doctor{{ $i }}" required>
	<option value="" selected disabled hidden>Doctor</option>
	<option  value="{{ $rowD->doc_id }}">{{ $rowD->full_name }}</option>
</select>
@endforeach
@foreach($instructorNames as $rowI)
<select style="background: #c4c7cc;height:41px;width:190px;" name="instructor{{ $i }}" required>
	<option value="" selected disabled hidden>Instructor</option>
	<option value="{{ $rowI->inst_id }}">{{ $rowI->full_name }}</option>
</select>
@endforeach
@endfor
<br><br><br><br><br><br><br><br><br>
@if(session()->has('message'))
    <div class="alert alert-success">
     <span class="help-block">
         <h3 style="color: red">* The course must not be repeated</h3>
     </span>
    </div>
@endif
<br><br><br>
</div>
<input type="hidden" name="course_no" value="{{ app('request')->input('courses') }}" autocomplete="off">
<br>
<input style="float: right;width: 150px;font-weight: bolder;" type="submit" value="submit">
</form>
</div>
</section>

@endsection