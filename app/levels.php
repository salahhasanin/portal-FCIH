<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class levels extends Model
{
    public $table = 'levels';

     public function stu_level(){

        return $this->HasOne('App\stu_level','id','level_id');
    }
}
