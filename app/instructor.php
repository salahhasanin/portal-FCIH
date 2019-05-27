<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    //

    public $table = 'instructors';

    protected $primaryKey = 'inst_id';

    public function user(){

        return $this->BelongsTo('App\User','inst_id','id');
    }

    public function opened_courses(){

    	return $this->HasOne('\App\course','inst_id','inst_id');
    }
}
