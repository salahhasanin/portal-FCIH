<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stuff extends Model
{
    //

    public $table = 'stuffs';

    protected $primaryKey = 'stuff_id';

    public function user(){

        return $this->BelongsTo('App\User','stuff_id','id');
    }
}
