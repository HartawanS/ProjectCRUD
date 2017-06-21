<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Built extends Model
{
    //
    protected $table  = "builtlist";
    protected $fillable = ['idbuilt','idproject','date','type','note','link_file_APK'];

     //custom timestamps name
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}
