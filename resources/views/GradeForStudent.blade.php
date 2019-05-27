@extends('layouts.app3')
@section('content')
<section id="main" class="wrapper">
				<div class="container">
<table class="alt">		<tr>
			<th>Student ID</th>
			<th>Student Name</th>
			<th>Class Work</th>
			<th>GPA</th>
		</tr>	
		@if(isset($allNews))
		@foreach($allNews as $allNews)
		<tr>
			<td>{{$allNews->stu_id}}</td>
			<td>{{$allNews->full_name}}</td>
			<td>{{$allNews->GPA}}</td>
			<td>{{$allNews->classWork}}</td>
		</tr>
		@endforeach
		@endif
	</table>
</div>
</section>
@endsection