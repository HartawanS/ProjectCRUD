<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $table = "projectlist";
    //fillable fields
    protected $fillable = ['name'];	
    
    //custom timestamps name
    // const CREATED_AT = 'created';
    // const UPDATED_AT = 'modified';
}
