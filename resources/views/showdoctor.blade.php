   @extends('layouts.app3')
   @section('content')

     <section id="main" class="wrapper">
                <div class="container">
              


   @foreach($doctorForStudent as $row)
   <div class="Doctor">

<form method="post" action="{{ url('ratedoctor') }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="hidden" name="insta" value="{{ $row->doc_id }}">
    <div>Doctor Name:</div> <h1>{{$row->full_name}}</h1> 

  <input type="submit" value="Rate Doctor">
  
</form>

    </div>

   @endforeach  
  
 </section>
@endsection
