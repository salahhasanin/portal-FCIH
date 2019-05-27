@extends('layouts.app4')
@section('content')
	<section id="main" class="wrapper">
		<div class="container">

		<script type="text/javascript">
	function RestrictSpace() {
    if (event.keyCode == 32) {
        return false;
    }
}
	</script>

<style type="text/css">

.soflow, select#soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
  margin :8px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 120px;

}
.soflow-color {
   color: #fff;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#779126, #779126 40%, #779126);
   background-color: #779126;
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   padding-left: 15px;
}
.labl{
	font-size:25px; margin-left: 20px;
}
.btn1,.btn2,.btn3,.btn4{
	width:200px;

	background-color: #4CAF50; /* Green */
    border: none;
    color: white;
   	padding:10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
        background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}
.btn1:hover{
	background-color: green;
}
.btn2:hover{
	background-color: red;
}
.btn3:hover{
	background-color: green;
}
.btn4:hover{
	background-color: red;
}
.txt{
	width:268px;
	border-radius: 10px;
	padding:10px;
	margin-right: 10px;
	margin-left: 6px;
}
.line{
	width:48%;
	height: 99%;
	margin-top: 1px;

}
.allForm{
}
table {
    border-collapse: collapse;
    width :93%;
    margin:10px;
    margin-left: 20px;
    height: 300px;
}

table, td, th {
    border: 1px solid black;
}
	</style>

<div class="allForm">
	<form action={{ url('/operate') }} method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<select class="soflow" name="level" style="width:680px; text-align:right;">
				<option selected disabled>level    </option>
	  			<option value="level_1">   level 1  </option>
	 		    <option value="level_2">   level 2  </option>
	 		    <option value="level_3">   level 3  </option>
	 		    <option value="level_4">   level 4 </option>
			</select>
			<br>
		<div style="display:inline-block; float:left">

			<select class="soflow" name="Day_Sunday">
	  			<option value="Sunday">   Sunday  </option>
			</select>
			<br />
			<select class="soflow" name="C_Sunday_8">
				<option selected disabled>8 AM</option>
				@foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Sunday_9">
				<option selected disabled>9 AM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Sunday_10">
				<option selected disabled>10 AM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Sunday_11">
				<option selected disabled>11 AM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Sunday_12">
				<option selected disabled>12 AM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
			<br />
			<select class="soflow" name="C_Sunday_1">
				<option selected disabled>1 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Sunday_2">
				<option selected disabled>2 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Sunday_3">
				<option selected disabled>3 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Sunday_4">
				<option selected disabled>4 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Sunday_5">
				<option selected disabled>5 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
			<br />
			<select class="soflow" name="C_Sunday_6">
				<option selected disabled>6 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
		</div>

		<div style="float:left">
			
			<select class="soflow" name="Day_Monday">
	 		    <option value="Monday">   Monday  </option>
			</select>
			<br />
			<select class="soflow" name="C_Monday_8">
				<option selected disabled>8 AM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Monday_9">
				<option selected disabled>9 AM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Monday_10">
				<option selected disabled>10 AM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Monday_11">
				<option selected disabled>11 AM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Monday_12">
				<option selected disabled>12 AM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
			<br />
			<select class="soflow" name="C_Monday_1">
				<option selected disabled>1 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Monday_2">
				<option selected disabled>2 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Monday_3">
				<option selected disabled>3 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Monday_4">
				<option selected disabled>4 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Monday_5">
				<option selected disabled>5 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
			<br />
			<select class="soflow" name="C_Monday_6">
				<option selected disabled>6 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
		</div>

				<div style="float:left">
			
			<select class="soflow" name="Day_Tusday">
	 		    <option value="Tusday">   Tusday  </option>
			</select>
			<br />
			<select class="soflow" name="C_Tusday_8">
				<option selected disabled>8 AM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Tusday_9">
				<option selected disabled>9 AM</option>
	 		  @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Tusday_10">
				<option selected disabled>10 AM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Tusday_11">
				<option selected disabled>11 AM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Tusday_12">
				<option selected disabled>12 AM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
			<br />
			<select class="soflow" name="C_Tusday_1">
				<option selected disabled>1 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Tusday_2">
				<option selected disabled>2 PM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Tusday_3">
				<option selected disabled>3 PM</option>
	 		  @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Tusday_4">
				<option selected disabled>4 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Tusday_5">
				<option selected disabled>5 PM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
			<br />
			<select class="soflow" name="C_Tusday_6">
				<option selected disabled>6 PM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
		</div>
				<div style="float:left">
			
			<select class="soflow" name="Day_Wensday">
	 		    <option value="Wensday">  Wensday </option>
			</select>
			<br />
			<select class="soflow" name="C_Wensday_8">
				<option selected disabled>8 AM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Wensday_9">
				<option selected disabled>9 AM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Wensday_10">
				<option selected disabled>10 AM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Wensday_11">
				<option selected disabled>11 AM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Wensday_12">
				<option selected disabled>12 AM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
			<br />
			<select class="soflow" name="C_Wensday_1">
				<option selected disabled>1 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Wensday_2">
				<option selected disabled>2 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Wensday_3">
				<option selected disabled>3 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Wensday_4">
				<option selected disabled>4 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Wensday_5">
				<option selected disabled>5 PM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
			<br />
			<select class="soflow" name="C_Wensday_6">
				<option selected disabled>6 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
		</div>

		<div style="float:left">
			
			<select class="soflow" name="Day_Thursday">
	 		    <option value="Thursday"> Thursday</option>
			</select>
			<br />
			<select class="soflow" name="C_Thursday_8">
				<option selected disabled>8 AM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Thursday_9">
				<option selected disabled>9 AM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Thursday_10">
				<option selected disabled>10 AM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Thursday_11">
				<option selected disabled>11 AM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Thursday_12">
				<option selected disabled>12 AM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
			<br />
			<select class="soflow" name="C_Thursday_1">
				<option selected disabled>1 PM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Thursday_2">
				<option selected disabled>2 PM</option>
	 		    @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>		
			<br />
			<select class="soflow" name="C_Thursday_3">
				<option selected disabled>3 PM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Thursday_4">
				<option selected disabled>4 PM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>
			<br />
			<select class="soflow" name="C_Thursday_5">
				<option selected disabled>5 PM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
			<br />
			<select class="soflow" name="C_Thursday_6">
				<option selected disabled>6 PM</option>
	 		   @foreach($courses as $row)
	 		    <option value="{{ $row->course_name }}">{{ $row->course_name }}</option>
	 		    @endforeach
			</select>	
		</div>
		<div style="clear:both"></div>
		<br>
		<input onkeypress="return RestrictSpace()" class="txt" type="text" name="table_name" placeholder="Enter Table Name : ">
		<br>
		<input style="width: 300px;" class="btn1" type="submit" name="btn_1" value="Make Lecture Schedule" />
		<input style="width: 300px;" class="btn2" type="submit" name="btn_2" value="Update Lecture Schedule" />
	</form>
</div>
	<div class="line">
		<form method="get" action={{ url('showTable') }}>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<select class="soflow" name="tableName" style="width:93%; margin-left:20px;">
				@if(isset($tables_Names))
				@foreach($tables_Names as $data)
				<option>{{$data}}</option>
				@endforeach
				@endif
			</select>
			<input type="submit" class="btn3" value="show" style="width:93%; margin-left:20px;"> 
		</form>
		
		<table>
			@if(isset($data2))
		  <caption style="font-size:30px; margin:10px;">
		@if(isset($tableName))
			{{ $tableName }}
		@endif
		  </caption>
			<tr>
				<th>Days/Hours</th>
				<th>8</th>
				<th>9</th>
				<th>10</th>
				<th>11</th>
				<th>12</th>
				<th>1</th>
				<th>2</th>
				<th>3</th>
				<th>4</th>
				<th>5</th>
				<th>6</th>
			</tr>
			@foreach($data2 as $data2)
			<tr>
				<td>{{ $data2->Days  }}</td>
				<td>{{ $data2->AM_8  }}</td>
				<td>{{ $data2->AM_9  }}</td>
				<td>{{ $data2->AM_10 }}</td>
				<td>{{ $data2->AM_11 }}</td>
				<td>{{ $data2->AM_12 }}</td>
				<td>{{ $data2->PM_1  }}</td>
				<td>{{ $data2->PM_2  }}</td>
				<td>{{ $data2->PM_3  }}</td>
				<td>{{ $data2->PM_4  }}</td>
				<td>{{ $data2->PM_5  }}</td>
				<td>{{ $data2->PM_6  }}</td>
			</tr>
			@endforeach
		</table>	
		<form method="post" action={{ url('/removeTable2') }}>.
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" value="{{ $tableName }}" name="T_Name">
					<input type="submit" value="Delete" class="btn4" style="width:93.5%; margin-left:12px; :hover {background: yellow}  ">
			</form>
		@endif
		@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	</div>

		@if(session()->has('message'))
		<script type="text/javascript">
		 alert('Table Exist');
		</script>
		@endif

			@if(session()->has('message2'))
		<script type="text/javascript">
		 alert('Table Not Found');
		</script>
		@endif

					@if(session()->has('message3'))
		<script type="text/javascript">
		 alert('Operation Succesfully');
		</script>
		@endif	
		</div>
	</section>
@endsection