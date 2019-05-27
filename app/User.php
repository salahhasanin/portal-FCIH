<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use \App\doctor;
use \App\instructor;
use \App\stuff;
use \App\student;

class class1 extends model{};
class class2 extends class1{};
class class3 extends Authenticatable{};

class User extends class3
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userType', 'id', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*public function courses(){
        return $this->belongsTo('App\courses','id','doc_id');
    }*/


    public $table = 'users';

    public function doctor(){

        return $this->HasOne('App\doctor','doc_id','id');
    }
    public function instructor(){

        return $this->HasOne('App\instructor','inst_id','id');
    }
    public function stuff(){

        return $this->HasOne('App\stuff','stuff_id','id');
    }
    public function student(){

        return $this->HasOne('App\student','stu_id','id');
    }
}
