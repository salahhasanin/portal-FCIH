<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\stu_level;
use \App\opened_courses;
use \App\student;
use \App\course;
use Auth;
use DB;
use \App\student_courses;
use \App\student_final_grade;

class studentController extends Controller

{
    

    public function show_course_details(Request $request){

     $coursesDetails = DB::select('SELECT course_code,course_name,prerequisite_course,course_hour FROM courses');

        return view('showCourses',compact('coursesDetails'));

    }

    //-----------------------------------------studentprofile------------------------------------------//

    public function Show_Student_Profile(){

      // $currentuserid = Auth::user()->id;

       $showProfile = DB::select('SELECT stu_id ,full_name,birthdate,email,address, gender,phone,GPA, Credit_hours,start_date FROM students where stu_id=?',[20161818]); 

        return view('studentprofile',compact('showProfile'));
    }

//-------------------------function that show all doctor that student register with------// 

    public function Show_doctor_for_student()
    {

      // $currentuserid = Auth::user()->id;

      $doctorForStudent = DB::select('SELECT full_name,doc_id,rate FROM doctors,doctor_rating where doc_id in (select doctorID from student_doctor where studentID=?)',[20161818]); 

        return view('showdoctor',compact('doctorForStudent'));
    } 

    //-------------------------function that doctor that will rate---------------------------// 

	  public function show_doctor_to_rate(Request $request)
    {

      // $currentuserid = Auth::user()->id;

      $doctorWhoRate = DB::select('SELECT full_name,doc_id FROM doctors where doc_id=?',[$request->get('insta')]);

          return view('ratedoctor',compact('doctorWhoRate'));
    } 

 //-------------------------function that rate operation itself---------------------------// 

	  public function Rating_doctor(Request $request){

   		$check = DB::select('SELECT id FROM doctor_rating where doctor_ID=? and student_ID=?',[$request->get('insta'),Auth::user()->id]);

      	 if(!$check){

               DB::insert('INSERT into doctor_rating (doctor_ID,student_ID,rate) values (?,?,?)',[$request->get('insta'),Auth::user()->id,$request->get('Rating')]);
        }

    	      return redirect('showdoctor');


    } 

    public function stu_course(){

    	$stu_level = stu_level::select('level_id')->where('stu_id', Auth::user()->id)->value('level_id');
    	$opened_courses = DB::Select('SELECT course_code,course_name,id from courses where courses.course_name 
    								in (SELECT course_name from opened_courses where level_no =?)',[$stu_level]);
    	$no_course    = count($opened_courses);
      $checks       = 0;
    	      return view('st_register',compact('opened_courses','no_course','checks'));
    }

    public function submit_stu_course(Request $request){

    	$courses_id = $request->get('course_id');

      for($i=0 ; $i < $request->input('no_course') ; $i++){


        if ($request->get($i) == 'on') {

        $preq = course::select('prerequisite_course')->where('id',$courses_id[$i])->value('prerequisite_course');
        if($preq == 'no'){

            

        }else{

        $preq_code = course::select('course_code')->where('course_name',$preq)->value('course_code');
        $course_name = course::select('course_name')->where('id',$courses_id[$i])->value('course_name');
        $check = student_final_grade::select('grade')->where('stu_id', Auth::user()->id)
                                                     ->where('course_code',$preq_code)->value('grade');
                    if($check < '50' || $check == null){

                      session()->flash('preq_fail','The '.$course_name.' course has prerequisite');
                      return redirect()->back();
                    }

          }
        }
      }

    	for($i=0 ; $i < $request->input('no_course') ; $i++){

    		if ($request->get($i) == 'on') {

    			${"variable$i"} = new student_courses();
    			${"variable$i"}->courses_id = $courses_id[$i];
    			${"variable$i"}->student_id = Auth::user()->id;
    			${"variable$i"}->save();
			   }
    	}

    	      return redirect()->back()->with('message', 'it WORKS!');
    }

}
