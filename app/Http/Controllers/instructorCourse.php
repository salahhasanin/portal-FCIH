<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class instructorCourse extends Controller
{
    public function show($data2 = null,$course_name = null)
    {
        $data=DB::select("SELECT course_name FROM opened_courses 
                          WHERE inst_id = 11334233"); 
        
        return view('instructor_course',['data'=>$data] , ['data2'=>$data2])->with('course_name',$course_name);
    }
    public function showRegisterdStudentCourse()
    {
        if(request()->has('course_name'))
        {
            $course_name = request('course_name');
            $data2=DB::select(" 
                SELECT students.stu_id , students.full_name FROM students
WHERE stu_id in ( SELECT student_course.student_id 
FROM student_course WHERE student_course.courses_id =(SELECT courses.id FROM courses WHERE courses.course_name='$course_name' ) )
                ");
            return $this->show($data2,$course_name);
            /*echo "<pre>";
                print_r($data2);
            echo "</pre>";*/
        
            
        }
        
    }
    public function saveStudentPractical()
    {
        $array1 = request('stu_id');
        $array2 = request('full_name');
        $array3 = request('practical');
        $course_name = request('course_name');
        DB::table('student_practical')->where('course_name', '=', $course_name)->delete();
        for ($i=0; $i < count($array1); $i++) { 
            DB::table('student_practical')->insert(
                    [
                    'stu_id' => $array1[$i],
                    'stu_name' => $array2[$i],
                    'course_name' => $course_name,
                    'practical' => $array3[$i],
                    ]
            );
        }
        return back();
    }
}
/*

INSERT INTO table (id, name, age) VALUES(1, "A", 19) ON DUPLICATE KEY UPDATE    
name="A", age=19
*/
