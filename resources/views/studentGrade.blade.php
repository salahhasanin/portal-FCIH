@extends('layouts.app3')
@section('content')
<section id="main" class="wrapper">
				<div class="container">
<table class="alt">
	  <tr>
	    <th>Student ID</th>
	    <th>Student Name</th>
	    <th>Attendance</th>
	    <th>non-Attendance</th>
	    <th>Quize(5)</th>
	    <th>Ass(5)</th>
	    <th>mitterm(20)</th>
	    <th>project(10)</th>
	  </tr>
	  <form method="post" action={{ url('/insertIntoStudentGrade') }}> 
	  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	  @foreach ($fields as $fields) 
	  @for($i=0; $i < count($fields['name1']); $i++)
@if((isset($fields['name2'])))
	  	@if(isset($fields['name2'][0]))
	  	<tr>	
		   	<td>{{$fields['name1'][$i]->stu_id}}                </td>
		   	<td>{{$fields['name1'][$i]->full_name}}         </td>
		   	<td><input type="number" name="Attendance[]" 		value="{{$fields['name2'][$i]->Attendance}}"/>      </td>
		   	<td><input type="number" name="non_Attendance[]"    value="{{$fields['name2'][$i]->non_Attendance}}"/> </td>
		   	<td><input type="number" name="Quize[]" 			value="{{$fields['name2'][$i]->Quize}}"/>        </td>
		   	<td><input type="number" name="Ass[]"			 	value="{{$fields['name2'][$i]->ass}}"/>          </td>
		   	<td><input type="number" name="mitterm[]"		    value="{{$fields['name2'][$i]->medtirm}}"/>     </td>
		   	<td><input type="number" name="project[]" 			value="{{$fields['name2'][$i]->project}}"/>     </td>
		  </tr>
	  	@endif
	  	@if(!(isset($fields['name2'][0])))
	  			  	<tr>	
		   	<td>{{$fields['name1'][$i]->stu_id}}                           </td>
		   	<td>{{$fields['name1'][$i]->full_name}}                          </td>
		   	<td><input type="number" name="Attendance[]" 		value=""/> </td>
		   	<td><input type="number" name="non_Attendance[]"    value=""/> </td>
		   	<td><input type="number" name="Quize[]" 			value=""/>    </td>
		   	<td><input type="number" name="Ass[]"			 	value=""/>     </td>
		   	<td><input type="number" name="mitterm[]"		    value=""/>     </td>
		   	<td><input type="number" name="project[]" 			value=""/>     </td>
		  </tr>
	  	@endif
	  @endif
		  <input type="hidden" name="stu_id[]"    value="{{$fields['name1'][$i]->stu_id}}"/>
		  <input type="hidden" name="full_name[]" value="{{$fields['name1'][$i]->full_name}}"/>
		  @endfor
	  @endforeach

	</table>
	  <input type="submit" value="save">
	  </form>
	</div>
</section>
@endsection

