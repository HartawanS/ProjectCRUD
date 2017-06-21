<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    //
    protected $table  = "buildlist";
    protected $fillable = ['idproject','type','note','link_file_APK'];

     //custom timestamps name
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
