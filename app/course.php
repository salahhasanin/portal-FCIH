<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    
    public $table = 'courses';


    public function department(){

 		return $this->belongsTo('App\department');
    }

    public function opened_courses(){

    	return $this->HasOne('\App\course','course_id','id');
    }

  
}
