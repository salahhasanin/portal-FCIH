<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\student;
use DB;
use Validator;
use Illuminate\Http\Request;
use Auth;

class doctorController extends BaseController
{
    public function show()
    {
    	$allNews  = student::all();
    	$allNews2 =DB::select("select * from studentGrade;"); 

    	$fields = [
        	['name1' => $allNews , 'name2' => $allNews2],
        ];
       
/*foreach ($fields as $fields) {
	for ($i=0; $i < count($fields['name1']); $i++) { 
		echo $fields['name1'][$i]->stu_id;
		echo "<br>";
	}
}*/
       return view('studentGrade',['fields'=>$fields]);
    }
    public function insertIntoStudentGrade()
    {
    	DB::table('studentGrade')->delete();
    	$ids = request('stu_id');
    	$name = request('full_name');
    	$Attendance = request('Attendance');
    	$non_Attendance = request('non_Attendance');
    	$Quize = request('Quize');
    	$ass = request('Ass');
    	$medtirm = request('mitterm');
    	$project = request('project');
    	
        for ($i=0; $i < count($ids); $i++) {        	
	        DB::table('studentGrade')->insert(
	   		 [
	   		 'stu_id' 		  => $ids[$i], 
	   		 'name' 		  => $name[$i],
	   		 'Attendance' 	  => $Attendance[$i],
	   		 'non_Attendance' => $non_Attendance[$i],
	   		 'Quize'          => $Quize[$i],
	   		 'ass'            => $ass[$i],
	   		 'medtirm'        => $medtirm[$i],
	   		 'project'        => $project[$i],
	   		 ] 
			);
        }
        return redirect('showStudentGrade');
    }
    public function showGradeForStudent()
    {

        $allNews =DB::select("select students.stu_id , students.full_name, students.GPA ,
SUM(studentgrade.Quize+studentgrade.ass+studentgrade.medtirm+studentgrade.project) AS classWork
FROM students , studentgrade 
where students.stu_id = studentgrade.stu_id AND students.full_name = studentgrade.name
GROUP BY students.stu_id ,students.full_name,students.GPA"); 
      
        return view('GradeForStudent',['allNews'=>$allNews]);
    }


            public function doctorThings()
    {

       $currentuserid = Auth::user()->id;

       $courseForDoctor = DB::select('SELECT course_name ,id FROM courses where id in (select course_id from doctor_course where doctor_id=?)',[$currentuserid]); 

        return view('viewDoctorThings',compact('courseForDoctor'));
    }

    //------------------------------------------------view students----------------------------//
      public function noOFstudets(Request $request)
    {

     $studentRegister = DB::select('SELECT COUNT(*) as user_count FROM student_course where courses_id=?'
       ,[$request->input('insta')]);
    
     $studentsInCourse = DB::select('SELECT full_name,stu_id FROM students where stu_id in (select student_id from student_course where courses_id=?)',[$request->input('insta')]);
        


        return view('AllStudents',compact('studentRegister','studentsInCourse'));

    }

}
