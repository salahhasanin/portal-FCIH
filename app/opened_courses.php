<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\course;

class opened_courses extends Model
{

	public $table = 'opened_courses';

    public function course(){

    	return $this->belongsTo('\App\course','id','course_id');
    }

    public function doctor(){

    	return $this->belongsTo('\App\course','doc_id','doc_id');
    }
    
    public function instructor(){

    	return $this->belongsTo('\App\course','inst_id','inst_id');
    }
}
