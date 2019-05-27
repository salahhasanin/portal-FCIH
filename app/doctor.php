<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class doctor extends Model
{
    
    public $table = 'doctors';

    protected $primaryKey = 'doc_id';

    public function user(){

        return $this->BelongsTo('App\User','doc_id','id');
    }

    public function opened_courses(){

    	return $this->HasOne('\App\course','doc_id','doc_id');
    }

}
