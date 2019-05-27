<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infoNew extends Model
{
    //
    protected $fillable=['new_data','new_title','new_content'];
    public $table = 'news';
    protected $primaryKey = 'new_id';
    public $timestamps=false;
}
