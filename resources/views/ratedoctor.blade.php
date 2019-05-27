 @extends('layouts.app3')
  
 @section('content')
<section id="main" class="wrapper">
                <div class="container">
              


   @foreach($doctorWhoRate as $row)
  <div>Doctor Name:</div>  <h1>{{$row->full_name}}</h1><br>
    
    Rate Doctor:
<form method="post" action="{{ url('/putRate') }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="insta" value="{{ $row->doc_id }}">

  <input type="radio"  id="1" name="Rating" value="1" checked><label for="1">1</label><br> 
  <input type="radio"  id="2" name="Rating" value="2"><label for="2">2</label><br>
  <input type="radio"  id="3" name="Rating" value="3"><label for="3">3</label><br> 
  <input type="radio"  id="4" name="Rating" value="4"><label for="4">4</label><br>
  <input type="radio"  id="5" name="Rating" value="5"><label for="5">5</label><br>
<input type="submit" value="Rate">
</form>
@endforeach 
  </div>
 </section>

@endsection

 