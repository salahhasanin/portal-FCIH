<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\student;
use \App\levels;

class stu_level extends Model
{
    
    public $table = 'stu_levels';

    public function student(){

    	return $this->BelongsTo('App\student','stu_id','stu_id');
    }
    public function levels(){

    	return $this->BelongsTo('App\levels','id','level_id');
    }
}
