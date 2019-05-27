<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class student extends Model
{
    //

    public $table = 'students';

    protected $primaryKey = 'stu_id';

    public function user(){

        return $this->BelongsTo('App\User','stu_id','id');
    }
    public function stu_level(){

        return $this->HasOne('App\stu_level','stu_id','stu_id');
    }
}
