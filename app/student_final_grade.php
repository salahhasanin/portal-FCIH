<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_final_grade extends Model
{
    
    public $table = 'student_final_grades';

    public function course(){

    	return $this->belongsTo('\App\course','id','course_id');
    }

    public function student(){

    	return $this->belongsTo('\App\student','stu_id','stu_id');
    }

}
