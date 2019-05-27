<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    
    public $table = 'departments';

    protected $primaryKey = 'dept_id';

    public function course(){

 		return $this->hasMany('App\course');
    }
}
