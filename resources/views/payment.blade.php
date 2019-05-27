@extends('layouts.app3')

	@section('content')
	<section id="main" class="wrapper">
		<div class="container">
		<div class="table-wrapper">
		<table style="width: 600px;" class="alt">
		<tr>
			<td ><h2 style="color: gray;">Did not pay</h2></td>
		</tr>
		@foreach($data1 as $data1)
			<tr>
				<td>{{$data1->full_name}}</td>
				
			</tr>
			
		@endforeach
		</table>



		<table style="width:600px;float: left" class="alt">
		<tr>
			<td><h2>Payment successful</h2></td>
		</tr>
		@foreach($data2 as $data2)
			<tr>
				<td>{{$data2->full_name}}</td>
			</tr>
		@endforeach
		</table>
	</div>
	</div>
</section>
@endsection