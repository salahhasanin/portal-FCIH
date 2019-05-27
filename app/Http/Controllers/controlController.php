<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\stu_level;
use \App\levels;
use \App\student;
use DB;
use \App\student_final_grade;

class controlController extends Controller
{

    public function showStudents(Request $request){


    		$level      = $request->input('level');
            /*$students = student::whereHas('stu_level', function ($s) use($level){
    				 	$s->where('level_id', $level);
						})->get();*/
            
            $students   = DB::select("SELECT (ifnull(Quize, 0) + ifnull(ass, 0) + ifnull(medtirm, 0) + ifnull(project, 0)) as grades,students.stu_id,full_name,course_code,course_name from studentgrade,students,courses,stu_levels where students.stu_id = studentgrade.stu_id and courses.id = studentgrade.course_id and stu_levels.stu_id = students.stu_id and stu_levels.level_id =?",[$level]); 

            $no_of_rows = count(DB::select("SELECT (ifnull(Quize, 0) + ifnull(ass, 0) + ifnull(medtirm, 0) + ifnull(project, 0)) as grades,students.stu_id,full_name,course_code,course_name from studentgrade,students,courses,stu_levels where students.stu_id = studentgrade.stu_id and courses.id = studentgrade.course_id and stu_levels.stu_id = students.stu_id and stu_levels.level_id =?",[$level]));

    	return view('studentGrades',compact('students','no_of_rows'));
    }

    public function addFinalResult(Request $request){

    		DB::table('student_final_grades')->delete();

    		$students_id  = $request->input('stu_id');
    		$courses_code = $request->input('course_code');
    		$class_work   = $request->input('class_work');
    		$final_exam   = $request->input('final_exam');

    		for($i=0;$i < $request->input('count');$i++){


    			$studentsFinal = new student_final_grade();
    			$studentsFinal->stu_id      = $students_id[$i];
    			$studentsFinal->course_code = $courses_code[$i];
    			$final_grade   = $class_work[$i] + $final_exam[$i];
    			$studentsFinal->grade  = $final_grade;
    			$studentsFinal->save();

    		}

    		return redirect()->back()->with('message', 'IT WORKS!');
    }

}

