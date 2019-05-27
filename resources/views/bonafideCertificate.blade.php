   @extends('layouts.app3')
   @section('content')

     <section id="main" class="wrapper">
                <div class="container">
              
                myprofile
                     <form method="get" action='{{ url("AllStudents") }}'>
                                    
                                    <input type="submit">
                     </form>
                 
     </div>
     </section>
@endsection
    