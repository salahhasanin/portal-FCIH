<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use \App\doctor;
use \App\instructor;
use \App\student;
use \App\stuff;
use \App\User;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect; 
use \App\stu_level;
use \App\levels;
use DB;

class adminController extends Controller
{

    public function add_doctor(Request $request){

        $this->validate($request, [
        'id'   => 'unique:users|required|numeric|digits_between:8,8',
        'name' => 'required|string|max:255',
        'password' => 'required|string|min:6|confirmed',
        'email' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'phone' => 'required|numeric|digits_between:8,15',
        'salary' => 'required|numeric|max:50000',
        'birthdate' => 'required|date|date_format:Y-m-d',
        'hiredate' => 'required|date|date_format:Y-m-d',
        'gender' => 'required'
        ]);

            $doc_data  = new doctor();
            $user_auth = new User();
            $user_auth->id        = $request->get('id');
            $user_auth->userType  = 'doctor';
            $user_auth->name      = $request->get('name');
            $user_auth->password  = bcrypt($request->get('password'));

            $doc_data->doc_id     = $request->get('id');
            $doc_data->full_name  = $request->get('name');
            $doc_data->birthdate  = $request->get('birthdate');
            $doc_data->password   = bcrypt($request->get('password'));
            $doc_data->email      = $request->get('email');
            $doc_data->address    = $request->get('address');
            $doc_data->phone      = $request->get('phone');
            $doc_data->salary     = $request->get('salary');
            $doc_data->hire_date  = $request->get('hiredate');
            $doc_data->gender     = $request->get('gender');
            $doc_data->save();
            $user_auth->save();
            return view('home');

        }


        //student

        public function add_student(Request $request){

          $this->validate($request, [
          'id'   => 'unique:users|required|numeric|digits_between:8,8',
          'name' => 'required|string|max:255',
          'password' => 'required|string|min:6|confirmed',
          'email' => 'required|string|max:255',
          'address' => 'required|string|max:255',
          'phone' => 'required|numeric|digits_between:8,15',
          'birthdate' => 'required|date|date_format:Y-m-d',
          'start_date' => 'required|date|date_format:Y-m-d',
          'gender' => 'required',
          'transcript' => 'required|string|max:255',
          'payment' => 'required',
          'GPA' => 'required|numeric|max:255',
          'Credit_hours'=>'required|integer'
          ]);
  
              $student_data         = new student();
              $user_auth            = new User();
              $user_auth->id        = $request->get('id');
              $user_auth->userType  = 'student';
              $user_auth->name      = $request->get('name');
              $user_auth->password  = bcrypt($request->get('password'));
  
              $student_data->stu_id           = $request->get('id');
              $student_data->full_name        = $request->get('name');
              $student_data->birthdate        = $request->get('birthdate');
              $student_data->password         = bcrypt($request->get('password'));
              $student_data->email            = $request->get('email');
              $student_data->address          = $request->get('address');
              $student_data->phone            = $request->get('phone');
              $student_data->start_date       = $request->get('start_date');
              $student_data->gender           = $request->get('gender');
              $student_data->transcript       = $request->get('transcript');
              $student_data->payment          = $request->get('payment');
              $student_data->GPA              = $request->get('GPA');
              $student_data->Credit_hours     = $request->get('Credit_hours');

              $student_level       = new stu_level();

              $student_level->stu_id          = $request->get('id');
              $student_level->level_id        = '1';

              $student_data->save();
              $user_auth->save();
              $student_level->save();

              return view('home');
  
          }

//sttaf


          public function add_stuff(Request $request){

            $this->validate($request, [
            'id'   => 'unique:users|required|numeric|digits_between:8,8',
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'email' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|numeric|digits_between:8,15',
            'birthdate' => 'required|date|date_format:Y-m-d',
            'hire_date' => 'required|date|date_format:Y-m-d',
            'gender' => 'required',
            'salary' => 'required|numeric|max:10000',
            'work_type' => 'required|string|max:255',
            ]);
    
                $stuff_data           = new stuff();
                $user_auth            = new User();
                $user_auth->id        = $request->get('id');
                $user_auth->userType  = 'stuff';
                $user_auth->name      = $request->get('name');
                $user_auth->password  = bcrypt($request->get('password'));
    
                $stuff_data->stuff_id         = $request->get('id');
                $stuff_data->full_name        = $request->get('name');
                $stuff_data->birthdate        = $request->get('birthdate');
                $stuff_data->password         = bcrypt($request->get('password'));
                $stuff_data->email            = $request->get('email');
                $stuff_data->address          = $request->get('address');
                $stuff_data->phone            = $request->get('phone');
                $stuff_data->hire_date        = $request->get('hire_date');
                $stuff_data->gender           = $request->get('gender');
                $stuff_data->work_type        = $request->get('work_type');
                $stuff_data->salary     = $request->get('salary');
  
  
  
  
                $stuff_data->save();
                $user_auth->save();
                return view('home');
    
            }




        // add new instructor

        public function add_instructor(Request $request){

            $this->validate($request, [
            'id'   => 'unique:users|required|numeric|digits_between:8,8',
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'email' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|numeric|digits_between:8,15',
            'salary' => 'required|numeric|max:10000',
            'birthdate' => 'required|date|date_format:Y-m-d',
            'hiredate' => 'required|date|date_format:Y-m-d',
            'gender' => 'required'
            ]);
    
                $instructor_data  = new instructor();
                $user_auth = new User();
                $user_auth->id                  = $request->get('id');
                $user_auth->userType            = 'instructor';
                $user_auth->name                = $request->get('name');
                $user_auth->password            = bcrypt($request->get('password'));

                $instructor_data->inst_id           = $request->get('id');
                $instructor_data->full_name         = $request->get('name');
                $instructor_data->birthdate         = $request->get('birthdate');
                $instructor_data->password          = bcrypt($request->get('password'));
                $instructor_data->email             = $request->get('email');
                $instructor_data->address           = $request->get('address');
                $instructor_data->phone             = $request->get('phone');
                $instructor_data->salary            = $request->get('salary');
                $instructor_data->hire_date         = $request->get('hiredate');
                $instructor_data->gender            = $request->get('gender');
                $instructor_data->save();
                $user_auth->save();
                return view('home');
    
            }
    

    public function hoome()
  {
    return view('profiles\admin');
  }
    public function search()
    { 

      if(request()->has('id')){
          $id = request('id');
        $userdata = User::find($id);
        if($userdata !== null)
        {
          $data = stuff::where('stuff_id', $id, Input::get('stuff_id'))->first();
          if ($data !== null) 
          {
            return view('profiles\admin',['data'=>$data]);
          }

          $data = instructor::where('inst_id', $id, Input::get('inst_id'))->first();
          if($data !==null)
          {
             return view('profiles\admin',['data'=>$data]);
          }
           
          $data = student::where('stu_id', $id, Input::get('stu_id'))->first();
          if($data !== null)
          {
              return view('profiles\admin',['data'=>$data]);
          }
              
          $data = doctor::where('doc_id', $id, Input::get('doc_id'))->first();
          if($data !==null)
          {
              return view('profiles\admin',['data'=>$data]);
               
          }
         
          
        }
        session()->flash('message','ID Not Found');
        return redirect('test');
      }  
      else
      {
        session()->flash('message','Please Enter ID');
       return redirect('test');
      }
    }

   
    
      public function showPayment()
      {
          $data1 = student::select('full_name')->where('payment',0)->get();
          $data2 = student::select('full_name')->where('payment',1)->get();
        return view('payment',['data1'=>$data1 , 'data2' =>$data2 ]);
       

      }

    //------------------------------------------------------------------------//

    


      public function editdoctor($id ,Request $request){

                
                if($request->has('password')){

                        $this->Validate( $request, [

                            'password' => 'required|string|min:6|confirmed',

                        ]);

                        DB::table('doctors')->where('doc_id', $id)->update(array(

                            'password'  => bcrypt($request->input('password'))

                        ));

                        return redirect('showUserInfo');

                }else{

                        $this->Validate( $request, [

                            'email' => 'required|string|email|max:255',
                            'address' => 'required|string|max:255',
                            'phone' => 'required|numeric|min:8',
                            'salary'=>'required|numeric|max:20000'

                        ]); 

                        DB::table('doctors')->where('doc_id', $id)->update(array(
                 
                            'email'     => $request->input('email'),
                            'address'   => $request->input('address'),
                            'phone'     => $request->input('phone'),
                            'salary'    => $request->input('salary')

                        ));

                        return redirect('showUserInfo');

                }

   }
  

      public function showUserInfo(Request $request){


                if($request->input('manage_user') == 'doctor'){

                            $alldoc   = doctor::all();

                            return view('newInfo',compact('alldoc'));

                }elseif($request->input('manage_user') == 'student'){

                            $allstu   = student::all();

                            return view('newInfo',compact('allstu'));

                }elseif($request->input('manage_user') == 'instructor'){

                            $allinst  = instructor::all();

                            return view('newInfo',compact('allinst'));

                }else{

                            $allstaff = stuff::all();

                            return view('newInfo',compact('allstaff'));

                }

                            return view('bogy');

    }
 
      public function doctorid(Request $request){

                $allo = doctor::find($request->input('doctor'));
                $data = DB::table('doctors')->
                    where(['doc_id'=>$request->input('doctor')])->get();

                return view('editDoc',compact('allo','data'));

   }
 
   //--------------------------------------------------------------------------// 
   
      public function editinst($id,Request $request){



                if($request->has('password')){

                        $this->Validate( $request, [

                            'password' => 'required|string|min:6|confirmed',

                        ]);

                        DB::table('instructors')->where('inst_id', $id)->update(array(

                            'password'  => bcrypt($request->input('password'))

                      ));

                        return redirect('showUserInfo');

                }else{

                        $this->Validate( $request, [

                            'email' => 'required|string|email|max:255',
                            'address' => 'required|string|max:255',
                            'phone' => 'required|numeric|min:8',
                            'salary'=>'required|numeric|max:10000'

                      ]);

                      DB::table('instructors')->where('inst_id', $id)->update(array(
                    
                            'email'     => $request->input('email'),
                            'address'   => $request->input('address'),
                            'phone'     => $request->input('phone'),
                            'salary'    => $request->input('salary'),

                      ));

                        return redirect('showUserInfo');
                }

  }
    
      public function instid(Request $request){

                $oppo = instructor::find($request->input('insta'));
                $data = DB::table('instructors')->
                    where(['inst_id'=>$request->input('insta')])->get();

                return view('editInstructor',compact('oppo','data'));
  }

    //---------------------------------------------------------------------//
    
      public function editstu($id,Request $request){

                if($request->has('password')){

                        $this->Validate( $request, [

                            'password' => 'required|string|min:6|confirmed',

                        ]);

                        DB::table('students')->where('stu_id', $id)->update(array(

                            'password'  => bcrypt($request->input('password'))

                        ));

                        return redirect('showUserInfo');

                }else{

                            if($request->input('level') == '1'){
                                $this->Validate( $request, [

                                  'email' => 'required|string|email|max:255',
                                  'address' => 'required|string|max:255',
                                  'phone' => 'required|integer|min:8',
                                  'GPA'=>'required|numeric|max:10000',
                                  'transcript' => 'required|string|max:255',
                                  'credit_hours' => 'required|numeric|between:0,35',
                                ]);

                            }elseif($request->input('level') == '2'){

                                $this->Validate( $request, [
                                  'email' => 'required|string|email|max:255',
                                  'address' => 'required|string|max:255',
                                  'phone' => 'required|integer|min:8',
                                  'GPA'=>'required|numeric|max:10000',
                                  'transcript' => 'required|string|max:255',
                                  'credit_hours' => 'required|numeric|between:36,71'
                                ]);
                                
                            }elseif($request->input('level') == '3'){

                                $this->Validate( $request, [
                                  'email' => 'required|string|email|max:255',
                                  'address' => 'required|string|max:255',
                                  'phone' => 'required|integer|min:8',
                                  'GPA'=>'required|numeric|max:10000',
                                  'transcript' => 'required|string|max:255',
                                  'credit_hours' => 'required|numeric|between:72,107'
                                ]); 

                            }else{

                                $this->Validate( $request, [
                                  'email' => 'required|string|email|max:255',
                                  'address' => 'required|string|max:255',
                                  'phone' => 'required|integer|min:8',
                                  'GPA'=>'required|numeric|max:10000',
                                  'transcript' => 'required|string|max:255',
                                  'credit_hours' => 'required|numeric|between:108,144'
                                ]);
                            }


                        DB::table('students')->where('stu_id',$id)->update(array(
                        
                            'email'        => request('email'),
                            'address'      => request('address'),           
                            'phone'        => request('phone'),
                            'GPA'          => request('GPA'),
                            'transcript'   => request('transcript'),
                            'Credit_hours' => request('credit_hours')

                        ));

                        DB::table('stu_levels')->where('stu_id',$id)->update(array(
                        
                            'level_id'     => request('level')

                        ));

                        return redirect('showUserInfo');

                      }

  }
    


      public function stuid(Request $request){

                        $sam=student::find($request->input('student'));
                        $data = DB::table('students')->
                                where(['stu_id'=>$request->input('student')])->get();

                        return view('editStudent',compact('sam','data'));

  }

  //----------------------------------------------------------------------  
    
      public function editstuff($id,Request $request){


                if($request->has('password')){

                        $this->Validate( $request, [

                            'password' => 'required|string|min:6|confirmed',

                        ]);

                        DB::table('stuffs')->where('stuff_id', $id)->update(array(

                            'password'  => bcrypt($request->input('password'))

                        ));

                        return redirect('showUserInfo');

                }else{


                        $this->Validate( $request, [

                            'email' => 'required|string|email|max:255',
                            'address' => 'required|string|max:255',
                            'phone' => 'required|numeric|min:8',
                            'salary'=>'required|numeric|max:10000',
                            'work_type' => 'required|string|max:255'

                        ]);

                        DB::table('stuffs')->where('stuff_id', $id)->update(array(

                                  'email'     => request('email'),
                                  'address'   => request('address'),
                                  'phone'     => request('phone'),
                                  'salary'    => request('salary'),
                                  'work_type' => request('work_type')

                        ));

                        return redirect('showUserInfo');
                }

  }
   
     public function stuffid(Request $request){

                         $haw  = stuff::find($request->input('stuff'));
                         $data = DB::table('stuffs')->
                                 where(['stuff_id'=>$request->input('stuff')])->get();

                        return view('editStuff',compact('haw','data'));
    }

//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//
public function addcertificate()
    {

      // $currentuserid = Auth::user()->id;
      
     return view('bonafideCertificate');
    } 

}
