<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projectlist extends Model
{
	protected $table = "projectlist";
    //fillable fields
    protected $fillable = ['project_name'];	
    
    //custom timestamps name
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}
